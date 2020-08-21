<?php


namespace Assurea\Api;

class Tarification
{
	protected $nb_assures = 1;
	protected $nb_prets = 1;
	protected $id_tarif = 0;

	protected $code_courtier = "";
	protected $id_source = 3;

	protected $retour_documents = 0;

	protected $push = false;

	public function setNbAssures($value)
	{
		if (in_array((int)$value, array(1, 2))) {
			$this->nb_assures = (int)$value;
		}
	}

	public function setNbPrets($value)
	{
		if (in_array((int)$value, array(1, 2))) {
			$this->nb_prets = (int)$value;
		}
	}

	/**
	 * @param bool $value
	 */
	public function setPush($value) {
		$this->push = (bool)$value;
	}

	public function setDateEffet($value)
	{
		$this->date_effet = $value;
	}

	public function setFractionnement($value)
	{
		$this->fractionnement = $value;
	}

	public function setObjetFinancement($value)
	{
		$this->objet_financement = $value;
	}

	public function setRetourDocument($value)
	{
		$this->retour_documents = $value;
	}

	public function setTarif($value) {
		$this->id_tarif = $value;
	}

	public function setCodeCourtier($value) {
		$this->code_courtier = $value;
	}




	// données assurés
	public function setCivilite($numAssure, $value)
	{
		$this->{'civilite_' . ((int)$numAssure)} = $value;
	}

	public function setFumeur($numAssure, $value)
	{
		$this->{'fumeur_' . ((int)$numAssure)} = $value;
	}

	public function setStatut($numAssure, $value)
	{
		$this->{'statut_' . ((int)$numAssure)} = $value;
	}

	public function setNom($numAssure, $value)
	{
		$this->{'nom_' . ((int)$numAssure)} = $value;
	}

	public function setNomNaissance($numAssure, $value)
	{
		$this->{'nom_naissance_' . ((int)$numAssure)} = $value;
	}

	public function setPrenom($numAssure, $value)
	{
		$this->{'prenom_' . ((int)$numAssure)} = $value;
	}

	public function setDateNaissance($numAssure, $value)
	{
		$this->{'date_naissance_' . ((int)$numAssure)} = $value;
	}

	public function setCSP($numAssure, $value)
	{
		$this->{'csp_' . ((int)$numAssure)} = $value;
	}

	public function setProfession($numAssure, $value)
	{
		$this->{'profession_' . ((int)$numAssure)} = $value;
	}

	public function setDeplacementsPro($numAssure, $value)
	{
		$this->{'deplacements_pro_' . ((int)$numAssure)} = $value;
	}

	public function setTravauxManuels($numAssure, $value)
	{
		$this->{'travaux_manuels_' . ((int)$numAssure)} = $value;
	}

	public function setAdresse($numAssure, $value)
	{
		$this->{'adresse_' . ((int)$numAssure)} = $value;
	}

	public function setComplementAdresse($numAssure, $value)
	{
		$this->{'complement_adresse_' . ((int)$numAssure)} = $value;
	}

	public function setCodePostal($numAssure, $value)
	{
		$this->{'code_postal_' . ((int)$numAssure)} = $value;
	}

	public function setVille($numAssure, $value)
	{
		$this->{'ville_' . ((int)$numAssure)} = $value;
	}

	public function setTypeAdhesion($numAssure, $value)
	{
		$this->{'type_adhesion_' . ((int)$numAssure)} = $value;
	}

	public function setFraisAdhesion($numAssure, $value)
	{
		$this->{'frais_adhesion_' . ((int)$numAssure)} = (int)$value;
	}

	public function setEmail($numAssure, $value)
	{
		$this->{'email_' . ((int)$numAssure)} = $value;
	}

	public function setTelephone($numAssure, $value)
	{
		$this->{'telephone_' . ((int)$numAssure)} = $value;
	}

	public function setPortable($numAssure, $value)
	{
		$this->{'portable_' . ((int)$numAssure)} = $value;
	}

	public function setPolitiqueExpose($numAssure, $value)
	{
		$this->{'politique_expose_' . ((int)$numAssure)} = $value;
	}

	public function setProchePolitiqueExpose($numAssure, $value)
	{
		$this->{'proche_politique_expose_' . ((int)$numAssure)} = $value;
	}

	/**
	 * @param int $numAssure
	 * @param bool $value
	 */
	public function setAdhesionEnLigne($numAssure, $value)
	{
		$this->{'adhesion_en_ligne_' . ((int)$numAssure)} = (bool)$value;
	}


	// données prets
	public function setMontant($numPret, $value)
	{
		$this->{'montant_' . ((int)$numPret)} = (int)$value;
	}

	public function setDuree($numPret, $value)
	{
		$this->{'duree_' . ((int)$numPret)} = (int)$value;
	}

	public function setDiffere($numPret, $value)
	{
		$this->{'differe_' . ((int)$numPret)} = (int)$value;
	}

	public function setTaux($numPret, $value)
	{
		$this->{'taux_' . ((int)$numPret)} = str_replace(',', '.', $value);
	}

	public function setTypePret($numPret, $value)
	{
		$this->{'type_pret_' . ((int)$numPret)} = $value;
	}

	// données garanties
	public function setGarantie($numPret, $numAssure, $value)
	{
		$this->{'garantie_' . ((int)$numPret) . '_' . ((int)$numAssure)} = $value;
	}

	public function setQuotite($numPret, $numAssure, $value)
	{
		$this->{'quotite_' . ((int)$numPret) . '_' . ((int)$numAssure)} = $value;
	}

	// données banque
	public function setBanque($value)
	{
		$this->banque = $value;
	}

	public function setAdresseBanque($value)
	{
		$this->adresse_banque = $value;
	}
	public function setCodePostalBanque($value)
	{
		$this->code_postal_banque = $value;
	}
	public function setVilleBanque($value)
	{
		$this->ville_banque = $value;
	}

	/**
	 * @return array
	 */
	public function apiData() {

		$dataOut = array(
			"nb_assure" => $this->nb_assures,
			"nb_pret" => $this->nb_prets,
			"id_source" => $this->id_source, // todo est-ce bien raisonnable ?

			"cc" => $this->code_courtier,
			"get_doc" => $this->retour_documents,
			"id_tarif" => $this->id_tarif,

			"nom_banque_preteuse" => $this->banque ?? '',
			"adresse_banque_preteuse" => $this->adresse_banque ?? '',
			"code_postal_banque_preteuse" => $this->code_postal_banque ?? '',
			"ville_banque_preteuse" => $this->ville_banque ?? '',

			"date_effet" => $this->date_effet ?? '',
			"frac_assurance" => $this->fractionnement ?? '',
			"id_objetdufinancement" => $this->objet_financement ?? '',

			"push" => ($this->push) ? 1 : 0,
		);


		for($i = 1; $i <= $this->nb_assures; $i++) {

			$ind0 = $i - 1;

			$dataOut['statut'][$ind0] = $this->{'statut_' . $i} ?? '';
			$dataOut['type_adhesion'][$ind0] = $this->{'type_adhesion_' . $i} ?? '';
			if(!array_key_exists($dataOut['type_adhesion'][$ind0], Constants::cadre_fi())) {
				$dataOut['type_adhesion'][$ind0] = Constants::CADRE_FI_NOUVEAU_PRET;
			}

			$dataOut['frais_adhesion'][$ind0] = $this->{'frais_adhesion_' . $i} ?? 0;

			$dataOut['civ'][$ind0] = $this->{'civilite_' . $i} ?? '';
			if(!array_key_exists($dataOut['civ'][$ind0], Constants::civilite())) {
				$dataOut['civ'][$ind0] = Constants::CIVILITE_HOMME;
			}

			$dataOut['nom'][$ind0] = $this->{'nom_' . $i} ?? '';
			$dataOut['nomjf'][$ind0] = $this->{'nom_naissance_' . $i} ?? '';
			$dataOut['prenom'][$ind0] = $this->{'prenom_' . $i} ?? '';

			$dataOut['adresse'][$ind0] = $this->{'adresse_' . $i} ?? '';
			$dataOut['complement_adresse'][$ind0] = $this->{'complement_adresse_' . $i} ?? '';
			$dataOut['ville'][$ind0] = $this->{'ville_' . $i} ?? '';
			$dataOut['cp'][$ind0] = $this->{'code_postal_' . $i} ?? '';

			$dataOut['fumeur'][$ind0] = $this->{'fumeur_' . $i} ?? '';
			if(!array_key_exists($dataOut['fumeur'][$ind0], Constants::fumeur())) {
				$dataOut['fumeur'][$ind0] = Constants::FUMEUR_NON;
			}

			$dataOut['deplacement'][$ind0] = $this->{'deplacements_pro_' . $i} ?? '';
			if(!array_key_exists($dataOut['deplacement'][$ind0], Constants::deplacements_pro())) {
				$dataOut['deplacement'][$ind0] = Constants::DEPLACEMENTPRO_MOINS_20000;
			}

			$dataOut['travaux_manuels'][$ind0] = $this->{'travaux_manuels_' . $i} ?? '';
			if(!array_key_exists($dataOut['travaux_manuels'][$ind0], Constants::travaux_manuels())) {
				$dataOut['travaux_manuels'][$ind0] = Constants::TRAVAUX_MANUELS_AUCUN;
			}

			$dataOut['categ_pro'][$ind0] = $this->{'csp_' . $i} ?? '';
			if(!array_key_exists($dataOut['categ_pro'][$ind0], Constants::csp())) {
				$dataOut['categ_pro'][$ind0] = Constants::CSP_SALARIE_NON_CADRE;
			}

			$dataOut['metier'][$ind0] = $this->{'profession_' . $i} ?? '';

			$dataOut['telephone'][$ind0] = $this->{'telephone_' . $i} ?? '';
			$dataOut['portable'][$ind0] = $this->{'portable_' . $i} ?? '';
			$dataOut['mail'][$ind0] = $this->{'email_' . $i} ?? '';

			$dataOut['politique_expose'][$ind0] = $this->{'politique_expose_' . $i} ?? '';
			if(!array_key_exists($dataOut['politique_expose'][$ind0], Constants::politique_expose())) {
				$dataOut['politique_expose'][$ind0] = Constants::POLITIQUE_EXPOSE_NON;
			}

			$dataOut['proche_politique_expose'][$ind0] = $this->{'proche_politique_expose_' . $i} ?? '';
			if(!array_key_exists($dataOut['proche_politique_expose'][$ind0], Constants::proche_politique_expose())) {
				$dataOut['proche_politique_expose'][$ind0] = Constants::PROCHE_POLITIQUE_EXPOSE_NON;
			}

			$dataOut['date_n'][$ind0] = $this->{'date_naissance_' . $i} ?? '';
			$dataOut['date_n_'.$ind0] = $this->{'date_naissance_' . $i} ?? '';

			$dataOut['adhesion_en_ligne'][$ind0] = !empty($this->{'adhesion_en_ligne_' . $i}) ? 1 : 0;

		}

		for($i = 1; $i <= $this->nb_prets; $i++) {

			$ind0 = $i - 1;

			$dataOut['type_pret'][$ind0] = $this->{'type_pret_'.$i} ?? '';
			if(!array_key_exists($dataOut['type_pret'][$ind0], Constants::types_pret())) {
				$dataOut['type_pret'][$ind0] = Constants::TYPE_PRET_AMORTISSABLE;
			}
			$dataOut['montant'][$ind0] = $this->{'montant_'.$i} ?? 0;
			$dataOut['taux'][$ind0] = $this->{'taux_'.$i} ?? '';
			$dataOut['mois'][$ind0] = $this->{'duree_'.$i} ?? 0;
			$dataOut['differe'][$ind0] = $this->{'differe_'.$i} ?? '';


			$dataOut['garanties'][$ind0] = $this->{'garantie_'.$i.'_1'} ?? '';
			if(!array_key_exists($dataOut['garanties'][$ind0], Constants::garanties())) {
				$dataOut['garanties'][$ind0] = Constants::GARANTIE_DC_PTIA;
			}

			$dataOut['couverture'][$ind0] = $this->{'quotite_'.$i.'_1'} ?? '';

			if($this->nb_assures == 2) {
				$dataOut['garanties1'][$ind0] = $this->{'garantie_'.$i.'_2'} ?? '';
				if(!array_key_exists($dataOut['garanties1'][$ind0], Constants::garanties())) {
					$dataOut['garanties1'][$ind0] = Constants::GARANTIE_DC_PTIA;
				}
				$dataOut['couverture1'][$ind0] = $this->{'quotite_'.$i.'_2'} ?? '';
			}
		}

		return $dataOut;
	}
}