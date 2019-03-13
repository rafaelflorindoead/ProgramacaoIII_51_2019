<?php
class Usuario
{
	public $id, $nome, $login, $senha, $ativo, $dataCadastro;
 
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
	public function setLogin ($login)
	{
		$this->login=$login;		
	}
	public function getLogin ()
	{
		return $this->login;
	}
	public function setSenha ($senha)
	{
		$this->senha=$senha;		
	}
	public function getSenha ()
	{
		return $this->senha;
	}public function setAtivo ($ativo)
	{
		$this->ativo=$ativo;		
	}
	public function getAtivo ()
	{
		return $this->ativo;
	}
	public function setDataCadastro ($dataCadastro)
	{
		$this->dataCadastro=$dataCadastro;		
	}

	public function getDataCadastro ()
	{
		return $this->dataCadastro;
	}
	
	public function listar()
	{
		return $this->getUser();
	}
	

	public function cadastrar($login, $senha, $nome, $ativo){
        $this->setLogin($login);
        $this->setSenha($senha);
        $this->setNome($nome);
        $this->setAtivo($ativo);
		$dataCadastro = date("Y-m-d h:m:s");
        $this->setDataCadastro($dataCadastro);


        $sql = "SELECT * from usuario WHERE login = '$this->login'";
        include ("Conexao.php");
        $query = $conectar->query($sql);
       	$registros = $conectar->affected_rows;

        if($registros == 1){
            header("location: ../view/index.php?pagina=formUsuario.php&mensagem=UsuarioExiste");
        }else{
            echo $sqlInsert = "insert into usuario (nome, login, senha, ativo, dataCadastro) VALUE
             ('{$this->getNome()}','{$this->getLogin()}','{$this->getSenha()}','{$this->getAtivo()}','{$this->getDataCadastro()}')";
            //exit;
            $d_usuario = $conectar->query($sqlInsert);
            $registros = $conectar->affected_rows;

            if($registros == 1){
                header("Location: ../view/index.php?pagina=formUsuario.php&acao=listar&mensagem=sucesso");
            }else{
                //echo "erro";
                header("location: ../view/index.php?pagina=formUsuario.php&acao=listar&mensagem=erro");
            }
        }
    }

    public function alterar($id, $login, $senha, $nome, $ativo){
        $this->setId($id);
        $this->setLogin($login);
        $this->setSenha($senha);
        $this->setNome($nome);
        $this->setAtivo($ativo);

        echo $sql = "update usuario set login= '{$this->getLogin()}', senha= '{$this->getSenha()}', nome= '{$this->getNome()}', ativo= '{$this->getAtivo()}' WHERE id = '{$this->getId()}'";
        include ("Conexao.php");
        $query = $conectar->query($sql);
        $registros = $conectar->affected_rows;

        if($registros == 1){
            header("location: ../view/index.php?pagina=formUsuario.php&acao=listar&mensagem=sucesso");
        }else{
            header("location: ../view/index.php?pagina=formUsuario.php&acao=listar&mensagem=erro");
        }
    }

    public function buscaDados($id){
        $this->setId($id);


        $sql = "SELECT * from usuario WHERE id = '{$this->getId()}'";
        include ("conexao.php");
        $query = $conectar->query($sql);
        $registros = $query->num_rows;

        if($registros == 1){
            $dados_usuario = $query->fetch_array();
            return $dados_usuario;
        }else{
            header("location: ../view/formLogin.php?mensagem=erro");
        }
    }
    public function buscaTodosDados(){
        $sql = "SELECT * from usuario";
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
            header("location: ../view/formLogin.php?mensagem=erro");
        }
    }


}
?>