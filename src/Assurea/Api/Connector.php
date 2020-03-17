<?php
namespace Assurea\Api;

/**
 * Class Connector
 * @package Assurea\Api
 * @author Ghislain Ott pour assurea distribution <ghislain.ott@gmail.com>
 */
class Connector {

    const API_ENDPOINT = 'https://api.assurea.fr/ca/index.php/';

    public $key;
    public $login;
    public $url;
    public $method;
    public $curlTimeout = 20;

    public $sslRelaxed = false;

    protected $lastError = null;
    protected $lastRawResult = null;

    /**
     *
     * @param string $login
     * @param string $key
     * @param string $method
     */
    public function __construct($apiLogin = '', $apiKey = '', $method = 'token/createToken')
    {
        $this->__set('key', $apiKey);
        $this->__set('url', self::API_ENDPOINT);
        $this->__set('login', $apiLogin);
        $this->__set('method', $method);
    }

    /**
     * @return string
     */
    public function getLastError() {
        return $this->lastError;
    }

    /**
     * @return string
     */
    public function getLastRawResult() {
        return $this->lastRawResult;
    }

    /**
     *
     * @return \stdClass|false
     */
    public function auth()
    {
        $postvars = ["data" => serialize(array('login' => $this->login, 'key' => $this->key))];
        $url = $this->url . $this->method;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
        if ($this->sslRelaxed) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        }
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->curlTimeout);

        $this->lastRawResult = curl_exec($ch);
        $erreur = curl_error($ch);

        curl_close($ch);

        if(!empty($erreur)) {
            $this->lastError = "Erreur cURL : ".$erreur;
            return false;
        }

        $resultatOut = json_decode($this->lastRawResult, false);
        if(json_last_error() !== JSON_ERROR_NONE) {
            $this->lastError = "Le retour de l'API n'est pas une chaine JSON valide : ".json_last_error();
            return false;
        }

        return $resultatOut;
    }

    /**
     * Fixe la valeur de la propriété appelée
     *
     * @param string $property
     * @param mixed $value
     * @return void
     */
    public function __set($property, $value)
    {
        if ('url' === $property && strlen($value) > 35) {
            $this->$property = (string)$value;
        } else {
            $this->$property = $value;
        }
    }

    /**
     * @param string $method
     * @param array $postvars
     * @param string $type
     * @param string $authToken
     * @return false|\stdClass
     */
    public function curl($method, $postvars, $type, $authToken)
    {
        if ($type == 'post') {
            $url = $this->url . $method;
        } elseif ($type == 'get') {
            $url = $this->url . $method . '/' . $postvars;
        } else {
            $url = $this->url . $method;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'X-Auth-Assurea:' . $authToken,
        ));
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
        if ($this->sslRelaxed) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        }
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->curlTimeout);

        $this->lastRawResult = curl_exec($ch);
        $erreur = curl_error($ch);

        curl_close($ch);

        if(!empty($erreur)) {
            $this->lastError = "Erreur cURL : ".$erreur;
            return false;
        }

        $resultatOut = json_decode($this->lastRawResult, false);
        if(json_last_error() !== JSON_ERROR_NONE) {
            $this->lastError = "Le retour de l'API n'est pas une chaine JSON valide : ".json_last_error();
            return false;
        }

        return $resultatOut;
    }

    /**
     * @param string $authToken
     * @param string $method
     * @param array $data
     * @return false|\stdClass
     */
    public function callApi($authToken, $method, $data = null)
    {
        $postvars = ["data" => ''];
        if ($data !== null) {
            $postvars = ["data" => json_encode($data)];
        }
        return $this->curl($method, $postvars, 'post', $authToken);
    }

}
