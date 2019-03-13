<?php
class Newsletter
{
	public $id, $nome, $email, $dataCadastro;
 
 	public function setId ($id)
	{
		$this->id=$id;		
	}
	public function getId ()
	{
		return $this->id;
	}
	public function setNome ($nome)
	{
		$this->nome= $nome;		
	}
	public function getNome ()
	{
		return $this->nome;
	}
	public function setemail ($email)
	{
		$this->email=$email;		
	}
	public function getemail ()
	{
		return $this->email;
	}
	
	public function setDataCadastro ($dataCadastro)
	{
		$this->dataCadastro=$dataCadastro;		
	}

	public function getDataCadastro ()
	{
		return $this->dataCadastro;
	}
	
	public function cadastrar($email, $nome){
        $this->setemail($email);
        $this->setNome($nome);
		$dataCadastro = date("Y-m-d h:m:s");
        $this->setDataCadastro($dataCadastro);


        $sql = "SELECT * from newsletter WHERE email = '$this->email'";
        include ("Conexao.php");
        $query = $conectar->query($sql);
       	$registros = $conectar->affected_rows;

        if($registros == 1){
            header("location: ../../site/index.php");
        }else{
            echo $sqlInsert = "insert into newsletter (nome, email, dataCadastro) VALUE
             ('{$this->getNome()}','{$this->getemail()}','{$this->getDataCadastro()}')";
            //exit;
            $d_usuario = $conectar->query($sqlInsert);
            $registros = $conectar->affected_rows;

            if($registros == 1){
                header("Location: ../../site/index.php");
            }else{
                //echo "erro";
                return 0; //header("location: ../../view/index.php");
            }
        }
    }

    public function buscaTodosDados(){
        $sql = "SELECT * from newsletter";
        include ("conexao.php");
        $query = $conectar->query($sql);
        $registros = $query->num_rows;

        if($registros > 0){
            $v = array();
            while ($dados_usuario = $query->fetch_array()){
                $v[]= $dados_usuario;
            }
            return $v;
        }else{
           // header("location: ../view/formLogin.php?mensagem=erro");
        }
    }


}
?>