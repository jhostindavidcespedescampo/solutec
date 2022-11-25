<?php
require_once("./AutoLoad.php");
class Venta extends Connection{
  private $connect; 
  private $strChequeoDeBodega;
  private $strConfirmarPedido;
  private $strGenerarPedido;

  public function __construct() {
    $this->connect = new Connection();
  }
  public function CrearVenta(string $chequeoDeBodega, string $confirmarPedido, string $generarPedido)
  {
    $this->$strChequeoDeBodega = $chequeoDeBodega;
    $this->$strConfirmarPedido = $confirmarPedido;
    $this->$strGenerarPedido = $generarPedido;

    $sql = "INSERT INTO venta(chequeoDeBode,confirmarPedido,generarPedido) VALUES(?,?,?)";
    $insert = $this->connect->prepare($sql);
    $arrData = array($this->$strChequeoDeBodega,$this->$strConfirmarPedido,$this->$strGenerarPedido);
    $resInsert = $insert->execute($arrData);
    $idInsert = $this->connect->lastInsertId();
    return $idInsert;                         
  }
  public function LecturaVenta() 
  {
    $sql = "SELECT * FROM venta";
    $execute = $this->connect->query($sql);
    $request = $execute->fetchall(PDO::FETCH_ASSOC);
    return $request;
    g
  }
}


?>