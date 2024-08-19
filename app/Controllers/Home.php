<?php

namespace App\Controllers;
use App\Models\ModelBuku;

use TCPDF;


class Home extends BaseController
{ 
    public function __construct() {
        $this->ModelBuku = new ModelBuku();
    }

    public function index(): string
    {
        $data = array(
            'data' => $this->ModelBuku->alldata(),
        );

        return view('bulletin',$data);
    }

    public function index1(): string
    {
        
        return view('badges');
    }

    public function printpdf(){

        $data = array(
            'data' => $this->ModelBuku->alldata(),
        );

        // créer un nouveau document PDF
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // définir les informations du document
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Nicola Asuni');
        $pdf->SetTitle('Université Barack Obama');
        $pdf->SetSubject('Tutoriel TCPDF');
        $pdf->SetKeywords('TCPDF, PDF, exemple, test, guide');

        // définir les données d'en-tête par défaut
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // définir la police à espacement fixe par défaut
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // définir les sauts de page automatiques
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // définir le facteur d'échelle des images
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // définir certaines chaînes dépendantes de la langue (optionnel)
        if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
            require_once(dirname(__FILE__).'/lang/eng.php');
            $pdf->setLanguageArray($l);
        }

        // ---------------------------------------------------------

        // définir la police
        $pdf->SetFont('dejavusans', '', 10);

        // ajouter une page
        $pdf->AddPage();

        // Fichier html
        $html = view('printpdf');

        $this->response->setContentType('application/pdf');

        // générer le contenu HTML
        $pdf->writeHTML($html , true, false, true, false, '');

        // réinitialiser le pointeur à la dernière page
        $pdf->lastPage();

        // ---------------------------------------------------------

        // fermer et envoyer le document PDF
        $pdf->Output('Bulletin.pdf', 'I');

        //============================================================+
        // END OF FILE
        //============================================================+
    }

    public function printBadges(){

        // créer un nouveau document PDF
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // définir les informations du document
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Nicola Asuni');
        $pdf->SetTitle('Université Barack Obama');
        $pdf->SetSubject('Tutoriel TCPDF');
        $pdf->SetKeywords('TCPDF, PDF, exemple, test, guide');

        // définir les données d'en-tête par défaut
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        // définir la police à espacement fixe par défaut
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // définir les sauts de page automatiques
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // définir le facteur d'échelle des images
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // définir certaines chaînes dépendantes de la langue (optionnel)
        if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
            require_once(dirname(__FILE__).'/lang/eng.php');
            $pdf->setLanguageArray($l);
        }

        // ---------------------------------------------------------

        // définir la police
        $pdf->SetFont('dejavusans', '', 8);

        // ajouter une page
        $pdf->AddPage();

        // Fichier html
        $html = view('printBagdes');

        $this->response->setContentType('application/pdf');

        // générer le contenu HTML
        $pdf->writeHTML($html , true, false, true, false, '');

        // réinitialiser le pointeur à la dernière page
        $pdf->lastPage();

        // ---------------------------------------------------------

        // fermer et envoyer le document PDF
        $pdf->Output('Bages.pdf', 'I');

        //============================================================+
        // END OF FILE
        //============================================================+
    }
}
