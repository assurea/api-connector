<?php


namespace Assurea\Api;


class Constants
{
	
	
	/**
		* garanties cadre financement
		*/
	const	CADRE_FI_NOUVEAU_PRET	=	0;
	const	CADRE_FI_HAMON	=	1;
	const	CADRE_FI_BOURQUIN	=	2;
				
    /**
     * garanties applicables
     */
	const GARANTIE_DC_PTIA = 1;
	const GARANTIE_DC_PTIA_ITT_IPT = 2;
	const GARANTIE_DC_PTIA_ITT_IPT_ITP_IPP = 3;
	const GARANTIE_DC_PTIA_ITT_IPT_RACHAT_MNO = 4;
	const GARANTIE_DC_PTIA_ITT_IPT_ITP_IPP_RACHAT_MNO = 5;
	const GARANTIE_DC_PTIA_ITT_IPT_PE = 6;
	const GARANTIE_DC_PTIA_ITT_IPT_ITP_IPP_PE = 7;
	/*
	const GARANTIE_DC_PTIA_ITT_IPT_RACHAT_MNO = 8;
	const GARANTIE_DC_PTIA_ITT_IPT_ITP_IPP_RACHAT_MNO = 9;
	*/
	const GARANTIE_DC_PTIA_IPPRO = 10; // specifique swisslife
	const GARANTIE_DC_PTIA_IPT = 11;
	const GARANTIE_DC_PTIA_IPT_IPP = 12;
	const GARANTIE_DC_PTIA_IPT_IPP_RACHAT_MNO = 13;

    /**
     * catégories socio-professionelles de l'assuré
     */
	const CSP_SALARIE_CADRE = 1;
	const CSP_SALARIE_NON_CADRE = 2;
	const CSP_PROFESSION_LIBERALE = 3;
	const CSP_CHIRURGIEN = 4;
	const CSP_CHIRURGIEN_DENTISTE = 5;
	const CSP_MEDECIN_SPECIALISTE = 6;
	const CSP_VETERINAIRE = 7;
	const CSP_ARTISAN = 8;
	const CSP_COMMERCANT = 9;
	const CSP_RETRAITE_PRE_RETRAITE = 10;
	const CSP_SANS_ACTIVITE = 11;

    /**
     * fumeur oui/non
     */
	const FUMEUR_OUI = 'O';
    const FUMEUR_NON = 'N';

	/**
	 * politique exposé oui/non
	 */
	const POLITIQUE_EXPOSE_OUI = 'O';
	const POLITIQUE_EXPOSE_NON = 'N';

	/**
	 * proche politique exposé oui/non
	 */
	const PROCHE_POLITIQUE_EXPOSE_OUI = 'O';
	const PROCHE_POLITIQUE_EXPOSE_NON = 'N';

    /**
     * déplacements professionels
     */
    const DEPLACEMENTPRO_MOINS_20000 = 1;
    const DEPLACEMENTPRO_PLUS_20000 = 2;

    /**
     * travaux manuels
     */
    const TRAVAUX_MANUELS_AUCUN = 0;
    const TRAVAUX_MANUELS_LEGER = 1;
    const TRAVAUX_MANUELS_MOYEN_IMPORTANT = 2;

    /**
     * type de prêt
     */
    const TYPE_PRET_AMORTISSABLE = 1;
    const TYPE_PRET_IN_FINE = 2;
    const TYPE_PRET_RELAIS = 3;
    const TYPE_PRET_CREDIT_BAIL = 4;
    const TYPE_PRET_LOA = 5;
    const TYPE_PRET_TAUX_ZERO = 6;
    const TYPE_PRET_PALIER = 7;
    const TYPE_PRET_HONNEUR = 8;
    const TYPE_PRET_RESTRUCTURATION = 9;
    const TYPE_PRET_AMORTISSABLE_PRO = 10;

    /**
     * civilité de l'assuré
     */
    const CIVILITE_HOMME = 'H';
    const CIVILITE_FEMME = 'F';

	/**
	 * objet du financement
	 */
	const OBJ_RESIDENCE_PRINCIPALE = 1;
	const OBJ_RESIDENCE_SECONDAIRE = 2;
	const OBJ_PRET_TRAVAUX = 3;
	const OBJ_INVEST_LOCATIF = 4;
	const OBJ_PRET_PRO = 5;
	const OBJ_OBJET_DIVERS = 6;
	const OBJ_PRET_CONSTRUCTION = 7;

    /**
     * @return array
     */
    public static function garanties() {
        return array(
            self::GARANTIE_DC_PTIA => 'Décès / PTIA',
            self::GARANTIE_DC_PTIA_IPT => 'Décès / PTIA / IPT',
            self::GARANTIE_DC_PTIA_IPT_IPP => 'Décès / PTIA / IPT / IPP',
            self::GARANTIE_DC_PTIA_ITT_IPT => 'Décès / PTIA / ITT / IPT',
            self::GARANTIE_DC_PTIA_ITT_IPT_ITP_IPP => 'Décès / PTIA / ITT / IPT / ITP / IPP',
            self::GARANTIE_DC_PTIA_ITT_IPT_RACHAT_MNO => 'Décès / PTIA / ITT / IPT avec rachat des exclusions dos/psy',
            self::GARANTIE_DC_PTIA_ITT_IPT_ITP_IPP_RACHAT_MNO => 'Décès / PTIA / ITT / IPT / ITP / IPP avec rachat des exclusions dos/psy',
            self::GARANTIE_DC_PTIA_ITT_IPT_PE => 'Décès / PTIA / ITT / IPT / PE',
            self::GARANTIE_DC_PTIA_ITT_IPT_ITP_IPP_PE => 'Décès / PTIA / ITT / IPT / ITP / IPP / PE',
            self::GARANTIE_DC_PTIA_IPPRO => 'Décès / PTIA / IPPRO (spécifique au tarif SWISSLIFE)',
            self::GARANTIE_DC_PTIA_IPT_IPP_RACHAT_MNO => 'Décès / PTIA / IPT / IPP avec rachat des exclusions dos/psy',
        );
    }

    /**
     * @return array
     */
    public static function csp() {
        return array(
            self::CSP_SALARIE_CADRE => 'Salarié cadre',
            self::CSP_SALARIE_NON_CADRE => 'Salarié non cadre',
            self::CSP_PROFESSION_LIBERALE => 'Profession libérale',
            self::CSP_CHIRURGIEN => 'Chirurgien',
            self::CSP_CHIRURGIEN_DENTISTE => 'Chirurgien-dentiste',
            self::CSP_MEDECIN_SPECIALISTE => 'Médecin spécialiste',
            self::CSP_VETERINAIRE => 'Vétérinaire',
            self::CSP_ARTISAN => 'Artisan',
            self::CSP_COMMERCANT => 'Commerçant',
            self::CSP_RETRAITE_PRE_RETRAITE => 'Retraité, pré-retraité',
            self::CSP_SANS_ACTIVITE => 'Sans activité professionelle',
        );
    }

    /**
     * @return array
     */
    public static function fumeur() {
        return array(
            self::FUMEUR_NON => 'Non fumeur',
            self::FUMEUR_OUI => 'Fumeur',
        );
    }

	/**
	 * @return array
	 */
	public static function politique_expose() {
		return array(
			self::POLITIQUE_EXPOSE_NON => 'Non',
			self::POLITIQUE_EXPOSE_OUI => 'Oui',
		);
	}

	/**
	 * @return array
	 */
	public static function proche_politique_expose() {
		return array(
			self::PROCHE_POLITIQUE_EXPOSE_NON => 'Non',
			self::PROCHE_POLITIQUE_EXPOSE_OUI => 'Oui',
		);
	}

    /**
     * @return array
     */
    public static function civilite() {
        return array(
            self::CIVILITE_HOMME => 'Monsieur',
            self::CIVILITE_FEMME => 'Madame',
        );
    }

    /**
     * @return array
     */
    public static function deplacements_pro() {
        return array(
            self::DEPLACEMENTPRO_MOINS_20000 => 'Moins de 20000km par an',
            self::DEPLACEMENTPRO_PLUS_20000 => '20000km par an et plus',
        );
    }

    /**
     * @return array
     */
    public static function travaux_manuels() {
        return array(
            self::TRAVAUX_MANUELS_AUCUN => 'Aucun ou occasionnel',
            self::TRAVAUX_MANUELS_LEGER => 'Avec travail manuel léger ou de précision',
            self::TRAVAUX_MANUELS_MOYEN_IMPORTANT => 'Avec travail manuel moyen ou important',
        );
    }

    /**
     * @return array
     */
    public static function types_pret() {
        return array(
            self::TYPE_PRET_AMORTISSABLE => 'Amortissable',
            self::TYPE_PRET_IN_FINE => 'In fine',
            self::TYPE_PRET_RELAIS => 'Relais',
            self::TYPE_PRET_CREDIT_BAIL => 'Crédit Bail',
            self::TYPE_PRET_LOA => 'LOA',
            self::TYPE_PRET_TAUX_ZERO => 'Taux 0%',
            self::TYPE_PRET_PALIER => 'Palier',
            //self::TYPE_PRET_HONNEUR => 'Prêt d\'honneur',
            self::TYPE_PRET_RESTRUCTURATION => 'Restructuration',
            self::TYPE_PRET_AMORTISSABLE_PRO => 'Amortissable professionnel',
        );
    }

	/**
		* @return array
		*/
	public	static	function	cadre_fi()	{
			return	array(
					self::CADRE_FI_NOUVEAU_PRET	=>	'Nouveau Prêt',
					self::CADRE_FI_HAMON	=>	'Loi Hamon',
					self::CADRE_FI_BOURQUIN	=>	'Loi Bourquin',
			);
	}

	/**
	 * @return array
	 */
	public	static	function	objet_financement()	{
		return	array(
			self::OBJ_RESIDENCE_PRINCIPALE => 'Acquisition Résidence Principale',
			self::OBJ_RESIDENCE_SECONDAIRE => 'Acquisition Résidence Secondaire',
			self::OBJ_PRET_TRAVAUX => 'Prêt travaux',
			self::OBJ_INVEST_LOCATIF => 'Investissement Locatif',
			self::OBJ_PRET_PRO => 'Prêt Professionnel',
			self::OBJ_OBJET_DIVERS => 'Crédit à objet divers',
			self::OBJ_PRET_CONSTRUCTION => 'Prêt construction',
		);
	}


}