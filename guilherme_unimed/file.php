<?php
  require_once("./fpdf.php");


  class PDF extends FPDF {

    function Header() {
      $this->Image('images/unimed.png', 10, 5, 50);
      $this->SetFont('Arial', 'B', 12);
      $this->SetTextColor(0, 100, 0);
      $this->Cell(0, 10, 'GUIA DE CONSULTA', 10, 1, 'C');
      $this->Cell(0,10, utf8_decode("n° xxxxxxxxxxx"), 10, 1, 'R');
      $this->SetDrawColor(0, 150, 0); // Define a cor da borda como verde

      $this->Ln(10);
    }

    function Footer() {
      $this->SetY(-15);
      $this->SetFont('Arial', 'I', 8);
    }

    function printDoc() {
      $this->SetFont('Arial', 'B', 7);
      $this->SetTextColor(0, 110, 0);
      $this->SetXY(10,30);
      $this->SetDrawColor(0, 125, 0);
      $this->Cell(40, 4, '1- Registro ANS', 'LTR', 1, 'L');
      $this->Cell(40, 4, '', 'LBR', 1, 'L');
      $this->SetXY(80, 30);
      $this->Cell(40, 4, utf8_decode('2- Data de emissão da guia'), 'LTR', 1, 'T');
      $this->SetXY(80, 34);
      $this->Cell(40, 4, ' |__|/|__|/|__|__|__|__|', 'LBR', 0, 'C');

      $this->Ln(5.5);

      $this->SetDrawColor(0, 125, 0);
      $this->SetFillColor(0,125,0); 
      $this->SetTextColor(255,255,255);
      $this->Cell(280, 5, utf8_decode('Dados do benificiário'), 1, 0, 'L', true); //width, height, string, border, ?, allign, fillBg

      $this->Ln(7);

      $this->SetDrawColor(0, 150, 0);
      $this->SetTextColor(0, 110, 0);
      $this->Cell(80, 4, utf8_decode('3- Número da carteira'), 'LTR', 1, 'L');
      $this->Cell(80, 4, '|__|__|__|__|__|__|__|__|__|__|__|__|__|__|__|__|__|__|', 'LBR', 0);
      $this->SetXY(90, 46.5);
      $this->Cell(50, 4, '4- Plano', 'LTR', 1, 'L');
      $this->SetXY(90, 50.5);
      $this->Cell(50, 4, '', 'LBR', 0, 'L');
      $this->SetXY(140, 46.5);

      $this->Cell(50, 4, '5- Validade da carteira','LTR', 1);
      $this->SetXY(140, 50.5);
      $this->Cell(50, 4, ' |__|/|__|/|__|__|__|__|', 'LBR', 0, 'C');
      $this->SetXY(180, 54.5);
      
      $this->Ln(1);
      
      $this->Cell(200, 4, '6- Nome','LTR', 1, 'L');
      $this->Cell(200, 4, '', 'LBR', 0, 'L');
      $this->SetXY(210, 55.5);

      $this->SetFillColor(205, 246, 215); 
      $this->Cell(80, 4, utf8_decode('7- Número do cartão nacional de saúde'), 'LTR', 1, 'L', true);
      $this->SetXY(210, 59.5);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(80, 4, '|__|__|__|__|__|__|__|__|__|__|__|__|__|__|__|__|__|__|', 'LBR', 0, 'L', true);

      $this->Ln(7);

      $this->SetDrawColor(0,125, 0);
      $this->SetFillColor(0, 125, 0); 
      $this->SetTextColor(255, 255, 255);
      $this->Cell(280, 5, 'Dados do contratado', 1, 0, 'L', true);

      $this->Ln(8);

      $this->SetDrawColor(0, 150, 0);
      $this->SetTextColor(0, 110, 0);
      $this->Cell(80, 4, utf8_decode('8- Código na Operadora/CNPJ/CPF'), 'LTR', 1);
      $this->Cell(80, 4, '|__|__|__|__|__|__|__|__|__|__|__|__|__|__|__|__|__|__|', 'LBR', 0);
      $this->SetXY(90, 74.5);
      $this->Cell(150, 4, '9- Nome do contratado','LTR', 1);
      $this->SetXY(90, 78.5);
      $this->Cell(150, 4, '', 'LBR', 0, 'L');
      $this->SetXY(240, 74.5);
      $this->Cell(50, 4, utf8_decode('10- Código CNES'),'LTR', 1);
      $this->SetXY(240, 78.5);
      $this->Cell(50, 4, '|__|__|__|__|__|__|__|__|__|', 'LBR', 0);

      $this->Ln(5);

      $this->SetFillColor(205, 246, 215); 
      $this->Cell(15, 4, '11- T.Log', 'LTR', 1, 'L', true);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(15,4,'|__|___|', 'LBR', 0, 'L', true);
      $this->SetXY(25, 83.5);

      $this->SetFillColor(205, 246, 215); 
      $this->Cell(110, 4, utf8_decode('12-13-14 Logradouro / Número / Complemento'), 'LTR', 1, 'L', true);
      $this->SetXY(25, 87.5);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(110, 4, '', 'LBR', 0, 'L', true);
      $this->SetXY(135, 83.5);

      $this->SetFillColor(205, 246, 215); 
      $this->Cell(60,4, utf8_decode('15- Município'),'LTR', 1, 'L', true);
      $this->SetXY(135, 87.5);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(60, 4, '', 'LBR', 0, 'L', true);
      $this->SetXY(195, 83.5);

      $this->SetFillColor(205, 246, 215); 
      $this->Cell(15, 4, '16- UF', 'LTR', 1, 'L', true);
      $this->SetXY(195, 87.5);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(15, 4, '', 'LBR', 0, 'L', true);
      $this->SetXY(210, 83.5);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(50, 4, utf8_decode('17- Código IBGE'), 'LTR', 1, 'L', true);
      $this->SetXY(210, 87.5);

      $this->SetFillColor(205, 246, 215); 
      $this->Cell(50, 4, '', 'LBR', 0, 'L', true);
      $this->SetXY(260, 83.5);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(30, 4, '18- CEP', 'LTR', 1, 'L', true);
      $this->SetXY(260, 87.5);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(30, 4, '', 'LBR', 0, 'L', true);
      $this->SetXY(260, 87.5);

      $this->Ln(5);

      $this->SetFillColor(205, 246, 215); 
      $this->Cell(110, 4, '19- Nome do profissional executante', 'LTR', 1, 'L', true);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(110, 4, '', 'LBR', 0, 'L', true);
      $this->SetXY(120,92.5);

      $this->Cell(60, 4, '20- Conselho Profissional', 'LTR', 1);
      $this->SetXY(120,96.5);
      $this->Cell(60, 4, '', 'LBR', 0);
      $this->SetXY(180, 92.5);

      $this->Cell(50, 4, utf8_decode('21- Número no conselho'), 'LTR', 1);
      $this->SetXY(180, 96.5);
      $this->Cell(50, 4, '', 'LBR', 0);
      $this->SetXY(230, 92.5);

      $this->Cell(15, 4, '22- UF', 'LTR', 1);
      $this->SetXY(230, 96.5);
      $this->Cell(15, 4, '', 'LBR', 0);
      $this->SetXY(245, 92.5);

      $this->SetFillColor(205, 246, 215); 
      $this->Cell(45, 4, utf8_decode('23- Código CBO S'), 'LTR', 1, 'L', true);
      $this->SetXY(245, 96.5);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(45, 4, '', 'LBR', 0, 'L', true);
      $this->SetXY(245, 96.5);

      $this->Ln(7);

      $this->SetDrawColor(0, 125, 0);
      $this->SetFillColor(0, 125, 0); 
      $this->SetTextColor(255, 255, 255);
      $this->Cell(280, 5, utf8_decode('Hipótese Diagnóstica'), 1, 0, 'L', true);

      $this->Ln(8);

      $this->SetDrawColor(0, 150, 0);
      $this->SetTextColor(0, 110, 0);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(45, 4, utf8_decode('24- Tipo de doença'), 'LTR', 1, 'L', true);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(45, 4, utf8_decode('|__| A-Aguda  C-Crônica'), 'LBR', 0, 'L', true);
      $this->SetXY(55,111.5);

      $this->SetFillColor(205, 246, 215); 
      $this->Cell(60, 4, utf8_decode('25- Tempo de Doença'), 'LTR', 1, 'L', true);
      $this->SetXY(55, 115.5);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(60, 4, '|__| - |__| - |__| A-Anos  M-Meses  D-Dias', 'LBR', 0, 'L', true);
      $this->SetXY(115, 111.5);

      $this->SetFillColor(205, 246, 215); 
      $this->Cell(100, 4, '26- Indicador de Acidente','LTR', 1, 'L', true);
      $this->SetXY(115,115.5);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(100, 4, utf8_decode('|__| 0-Acidente ou doença relacionada ao trabalho  1-Trânsito 2-Outros'), 'LBR', 0, 'L', true);
      $this->SetXY(115, 119.5);

      $this->Ln(1);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(45, 4, '27- CID Principal', 'LTR', 1, 'L', true);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(45, 4, '  |__|__|__|__|__|', 'LBR', 0, 'L', true);
      $this->SetXY(55, 120.5);

      $this->SetFillColor(205, 246, 215); 
      $this->Cell(45, 4, '28- CID(2)','LTR', 1, 'L', true);
      $this->SetXY(55, 124.5);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(45, 4, '   |__|__|__|__|__|', 'LBR', 0, 'L', true);
      $this->SetXY(100, 120.5);

      $this->SetFillColor(205, 246, 215); 
      $this->Cell(45, 4, '29- CID(3)', 'LTR', 1, 'L', true);
      $this->SetXY(100, 124.5);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(45, 4, '   |__|__|__|__|__|', 'LBR', 0, 'L',true);
      $this->SetXY(145, 120.5);

      $this->SetFillColor(205, 246, 215); 
      $this->Cell(45, 4, '30- CID(4)', 'LTR', 1, 'L', true);
      $this->SetXY(145, 124.5);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(45, 4, '  |__|__|__|__|__|', 'LBR', 0, 'L', true);
      $this->SetXY(100, 127.5);

      $this->Ln(5);

      $this->SetDrawColor(0, 125, 0);
      $this->SetFillColor(0, 125, 0); 
      $this->SetTextColor(255, 255, 255);
      $this->Cell(280, 5, 'Dados do Atendimento/Procedimento Realizado', 1, 0, 'L', true);
      $this->Ln(8);

      $this->SetDrawColor(0, 150, 0);
      $this->SetTextColor(0, 110, 0);
      $this->Cell(40, 4, '31- Data do Atendimento', 'LTR', 1, 'L');
      $this->Cell(40, 4, '|__|__|/|__|__|/|__|__|__|__|', 'LBR', 0);
      $this->SetXY(50, 140.5);

      $this->Cell(25, 4, utf8_decode('32- Código Tabela'), 'LTR', 1);
      $this->SetXY(50, 144.5);
      $this->Cell(25, 4, '        |__|__|', 'LBR', 0, 'L');
      $this->SetXY(75, 140.5);

      $this->Cell(70, 4, utf8_decode('33- Código Procedimento'), 'LTR', 1);
      $this->SetXY(75, 144.5);
      $this->Cell(70, 4, '|__|__|__|__|__|__|__|__|__|__|__|__|__|', 'LBR', 0);
      $this->SetXY(75, 148.5);
      $this->Ln(1);

      $this->Cell(70, 4, '34- Tipo de Consulta', 'LTR', 1);
      $this->Cell(70, 4, utf8_decode('   |__|   1- Primeira     2- Seguimento     3- Pré-Natal'), 'LBR', 0);
      $this->SetXY(80, 149.5);


      $this->Cell(90, 4, utf8_decode('35- Tipo de saída'), 'LTR',  1);
      $this->SetXY(80, 153.5);
      $this->Cell(90, 4, utf8_decode('   |__|  1- Retorno  2- Retorno SADT  3- Referência  4- Internação  5-Alta'), 'LBR', 0);
      $this->SetXY(50, 158);

      $this->Ln(1);

      $this->SetFillColor(205, 246, 215); 
      $this->Cell(280, 4, utf8_decode('36- Observação'), 'LTR', 1, 'L', true);
      $this->SetFillColor(205, 246, 215); 
      $this->Cell(280, 15, '', 'LBR', 1, 'L', true);

      $this->Ln(1);
      
      $this->Cell(140, 4, utf8_decode('37-Data e Assinatura do Médico'), 'LTR', 1);
      $this->Cell(140, 4, '|__|__|/|__|__|/|__|__|__|__| __________________________________________________________________________', 'LBR', 0);
      $this->SetXY(150,179);
      $this->Cell(140, 4, utf8_decode('38- Data e Assinatura do Benificiário ou Responsável'), 'LTR', 1);
      $this->SetXY(150, 183);
      $this->Cell(140, 4, '|__|__|/|__|__|/|__|__|__|__| __________________________________________________________________________', 'LBR', 0);
    }
  }


  $pdf = new PDF("L"); //Horizontal file
  $pdf->AddPage();
  $pdf->printDoc();
  $pdf->SetDrawColor(255, 110, 0);
  
  $pdf->Output();

?>