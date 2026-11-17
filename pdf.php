<?php 
  require ("fpdf/fpdf.php");
  require "connect.php"; 



  $sql="SELECT * FROM pay WHERE payid='{$_GET["payid"]}'";
  $res=$conn->query($sql);
  if($res->num_rows>0){
	  $row=$res->fetch_assoc();
	 

	  $info=[
        "payid"=>$row["payid"],
        "dname"=>$row["dname"],
        "nic"=>$row["nic"],
        "address"=>$row["address"],
        "offensename"=>$row["offensename"],
        "pay_amount"=>$row["pay_amount"],
        "date&time"=>$row["date&time"],
        "dl_no"=>$row["dl_no"],
        "vehicleno"=>$row["vehicleno"],
    
	  ];
  }
  
  class PDF extends FPDF
  {
    function Header(){
     $this->Image('images/logo.png',25,0,0,25);
      $this->SetTextColor(60, 154, 135);
      $this->SetFont('Arial','BI',16);
      $this->Cell(135,10,"TRAFFIC OFFENCE",0,0,'C');
      $this->Ln(15);
      $this->SetTextColor(0,0,0);
      $this->SetFont('Arial','I',24);
      $this->SetFillColor(60, 154, 135);
      $this->Cell(75,10,"",0,0,'C',true);
      $this->Cell(75,10,"Payment Receipt",0,0,'C');
      $this->Cell(40,10,"",0,0,'C',true);
      $this->SetY(25);
      $this->SetX(-70);

    }
    
    function body($info){
      
      //Billing Details
      $this->SetY(35);
      $this->SetX(10);
      $this->SetTextColor(0,0,0);
      $this->Ln(4);
      $this->SetFont('Arial','B',12);
      $this->Cell(55,10,"Invoice No :",0,0);
      $this->SetFont('Arial','',12);
      $this->Cell(10,10,"TOF",0,0);
      $this->Cell(16,10,$info["payid"],0,1);
      $this->SetFont('Arial','B',12);
      $this->Cell(55,8,"Name :",0,0);
      $this->SetFont('Arial','',12);
      $this->Cell(16,8,$info["dname"],0,1);
      $this->SetFont('Arial','B',12);
      $this->Cell(55,8,"NIC :",0,0);
      $this->SetFont('Arial','',12);
      $this->Cell(16,8,$info["nic"],0,1);
      $this->SetFont('Arial','B',12);
      $this->Cell(55,8,"Address :",0,0);
      $this->SetFont('Arial','',12);
      $this->Cell(16,8,$info["address"],0,1);
      $this->SetFont('Arial','B',12);
      $this->Cell(55,8,"Date & Time :",0,0);
      $this->SetFont('Arial','',12);
      $this->Cell(16,8,$info["date&time"],0,1);
      
      $this->Line(35,85,177,85);

      $this->Ln(10);

      $this->SetFont('Arial','IU',13);
      $this->Cell(55,8,"Payment Details",0,0);
   
      $this->Ln(8);

      $this->SetFont('Arial','B',12);
      $this->Cell(15,8,"",0,0);
      $this->Cell(45,8,"Offense Name :",0,0);
      $this->SetFont('Arial','',12);
      $this->MultiCell(140,8,$info["offensename"],0,1);
      $this->Ln(4);
      $this->SetFont('Arial','B',12);
      $this->Cell(15,8,"",0,0);
      $this->Cell(45,8,"Pay Amount :",0,0);
      $this->SetFont('Arial','',12);
      $this->Cell(8,8,"Rs:",0,0);
      $this->Cell(40,8,$info["pay_amount"],0,1);
    }


      function Footer(){
        $this->SetFont('Arial','',10);
        $this->Ln(10);
       
        $this->Cell(0,2,"This is a computer generated Payment Receipt",0,1,"C");
        
        
        
      }
      
    
  }
  $pdf=new PDF("L","mm","A5");
  $pdf->AddPage();
  $pdf->body($info);
  $pdf->Output();
?>