<?php
  require_once("../fpdf.php");
  

  class PDF extends FPDF {

    function Header() {
      $this->Image('images/bradesco.png', 10, 10, 15);
      $this->SetFont('Arial', 'B', 20);
      $this->SetX(30);
      $this->Cell(0, 15, "Bradesco");
      $this->SetX(65);
      $this->Cell(21, 15, '123-4', 'LR');
      $this->SetFont('Arial', 'B', 15);
      $this->SetX(110);
      $this->Cell(0, 24, '123.123.1231231414.123131313-131311.12');

      $this->Ln(2);

      $this->Cell(0, 13, '', 'B', 1);

      $this->Ln(5);
    }

    function printDoc() {
      $this->SetFont('Arial', '', 12);

      $this->Cell(200, 6, 'Local de pagamento', 'LTR', 1, 'L');
      $this->Cell(200, 6, '', 'LBR', 0, 'L');
      $this->SetXY(210, 30);
      $this->Cell(80, 6, 'Vencimento', 'TR', 1, 'L');
      $this->SetXY(210, 36);
      $this->Cell(80, 6, '19/10/2023', 'BR', 0, 'R');

      $this->Ln(6.2);

      $this->Cell(200, 6, 'Cedente', 'LR', 1, 'L');
      $this->Cell(200, 6, '', 'LBR', 0, 'L');
      $this->SetXY(210, 43);
      $this->Cell(80, 6, utf8_decode('Agência/Código cedente'), 'R');
      $this->SetXY(210, 48.3);
      $this->Cell(80, 5.9, '1111-8/0002222-5', 'BR', 0, 'R');

      $this->Ln(6.2);

      $this->Cell(45, 6, 'Data do documento', 'LR', 1, 'L');
      $this->Cell(45, 6, '18/10/2023', 'LBR', 0, 'L');
      $this->SetXY(55, 54.5);

      $this->Cell(40, 6, utf8_decode('N° documento'), 'R', 1, 'L');
      $this->SetXY(55, 60.5);
      $this->Cell(40, 6, 'NF 1 1/1', 'LBR', 0, 'L');
      $this->SetXY(95, 54.5);

      $this->Cell(35, 6, utf8_decode('Espécie Doc'), 'R', 1, 'L');
      $this->SetXY(95, 60.5);
      $this->Cell(35, 6, 'boleto?', 'BR', 0, 'L');
      $this->SetXY(130, 54.5);

      $this->Cell(35, 6, 'Aceite', 'R', 1, 'L');
      $this->SetXY(130, 60.5);
      $this->Cell(35, 6, 'N', 'BR', 0, 'L');
      $this->SetXY(165, 54.5);

      $this->Cell(45, 6, 'Data processamento', 'R', 1, 'L');
      $this->SetXY(165, 60.5);
      $this->Cell(45, 6, '18/10/2023', 'LBR', 0, 'L');
      
      $this->SetXY(210, 54.5);
      $this->Cell(80, 6, utf8_decode('Carteira/Nosso número'), 'R', 1, 'L');
      $this->SetXY(210, 60.5);
      $this->Cell(80, 6, '06/000000001001-6', 'BR', 0, 'L');

      $this->Ln(6.2);

      //3° Sessão

      $this->Cell(45, 6, 'Uso do banco', 'LR', 1, 'L');
      $this->Cell(45, 6, '18/10/2023', 'LBR', 0, 'L');
      $this->SetXY(55, 67);

      $this->Cell(40, 6, 'Carteira', 'R', 1, 'L');
      $this->SetXY(55, 72.7);
      $this->Cell(40, 6, '06', 'LBR', 0, 'L');
      $this->SetXY(95, 67);

      $this->Cell(35, 6, utf8_decode('Espécie'), 'R', 1, 'L');
      $this->SetXY(95, 72.7);
      $this->Cell(35, 6, 'R$', 'BR', 0, 'L');
      $this->SetXY(130, 67);

      $this->Cell(35, 6, 'Quantidade', 'R', 1, 'L');
      $this->SetXY(130, 72.7);
      $this->Cell(35, 6, '', 'BR', 0, 'L');
      $this->SetXY(165, 67);

      $this->Cell(45, 6, '(x) valor', 'R', 1, 'L');
      $this->SetXY(165, 72.7);
      $this->Cell(45, 6, '', 'LBR', 0, 'L');
      
      $this->SetXY(210, 67);
      $this->Cell(80, 6, '(=) Valor documento', 'R', 1, 'L');
      $this->SetXY(210, 72.7);
      $this->Cell(80, 6, 'R$ 1.350,00', 'BR', 0, 'L');

      //4° sessão
      $this->Ln(6.2);

      $this->Cell(200, 6, utf8_decode('Instruções (Texto de responsabilidade do cedente)'), 'LR', 1, 'L');
      $this->Cell(200, 6, utf8_decode('Não receber após o vencimento'), 'LR', 0, 'L');
      $this->SetXY(55, 67);

      $this->SetXY(210, 79);
      $this->Cell(80, 6, utf8_decode('(-) Outras deduções'), 'R', 1, 'L');
      $this->SetXY(210, 84.9);
      $this->Cell(80, 6, '', 'BR', 0, 'L');

      $this->Ln(6.2);

      $this->Cell(200, 6, 'Boleto de 1 de 1 referente a NF 1 de 18/10/2023 com chave', 'LR', 1, 'L');
      $this->Cell(200, 6, '(chave do boleto)', 'LR', 0, 'L');
      $this->SetXY(55, 67);

      $this->SetXY(210, 91);
      $this->Cell(80, 6, '(+) Mora/Multa', 'R', 1, 'L');
      $this->SetXY(210, 97.1);
      $this->Cell(80, 6, '', 'BR', 0, 'L');

      $this->Ln(6.2);

      $this->Cell(200, 6, '', 'LR', 1, 'L');
      $this->Cell(200, 6, '', 'LR', 0, 'L');
      $this->SetXY(55, 67);

      $this->SetXY(210, 103); //12
      $this->Cell(80, 6, utf8_decode('(-) Outros Acréscimos'), 'R', 1, 'L');
      $this->SetXY(210, 109.3); //12.2
      $this->Cell(80, 6, '', 'BR', 0, 'L');

      $this->Ln(6.2);

      $this->SetFont('Arial', 'B', 26);
      $this->Cell(200, 6, 'ATUALIZAR BOLETO BRADESCO', 'LR', 1, 'C');
      $this->Cell(200, 6, '', 'LBR', 0, 'L');
      $this->SetXY(55, 67);

      $this->SetXY(210, 115);
      $this->SetFont('Arial', '', 12);
      $this->Cell(80, 6, utf8_decode('(=) Valor cobrado'), 'R', 1, 'L');
      $this->SetXY(210, 121.5);
      $this->Cell(80, 6, '', 'BR', 0, 'L');

      $this->Ln(6.2);

      $this->Cell(200, 10, 'Sacado', 'L', 1, 'L');
      $this->Cell(200, 6, utf8_decode('DEMANDANET SERVIÇOS DE TECNOLOGIA CNPJ 00.000.000/0001-00'), 'L', 1, 'L');
      $this->Cell(200, 6, utf8_decode('Av. Romeu Strazzi 325 7° andar'), 'LR', 1, 'L');
      $this->Cell(200, 6, utf8_decode('Centro - São josé do Rio Preto/SP - CEP: 15015-700'), 'LBR', 1, 'L');
      $this->SetXY(55, 67);

      $this->SetXY(210, 149.7);
      $this->Cell(80, 6, utf8_decode('Código baixa'), 'B', 0, 'L');

      $this->Ln(6.2);

      $this->Cell(80, 6, utf8_decode('Sacador/Avalista'), 0, 0);
      $this->SetFont('Arial', '', '10');
      $this->Cell(200, 6, utf8_decode('Autenticação mecânica - Ficha de Compensação'), 0, 1, 'R');


      $this->Ln(6.2);
      $this->Image('images/barCode.png', 5, 182, 130, 25);

    }
  }


  $pdf = new PDF("L"); //Horizontal file
  $pdf->AddPage();
  $pdf->printDoc();
  $pdf->SetDrawColor(255, 110, 0);
  
  $pdf->Output();

?>