<?php
class Noticia
{
	public $id, $titulo, $descricao, $autor, $ativo, $dataCadastro, $imagem, $fonte;

	public function setId ($id)
	{
		$this->id=$id;		
	}
	public function getId ()
	{
		return $this->id;
	}
	public function setTitulo ($titulo)
	{
		$this->titulo= $titulo;		
	}
	public function getTitulo ()
	{
		return $this->titulo;
	}
	public function setDescricao ($descricao)
	{
		$this->descricao=$descricao;		
	}
	public function getDescricao ()
	{
		return $this->descricao;
	}
	public function setAutor ($autor)
	{
		$this->autor=$autor;		
	}
	public function getAutor ()
	{
		return $this->autor;
	}

	public function setImagem ($imagem)
	{
		$this->imagem=$imagem;		
	}
	public function getImagem ()
	{
		return $this->imagem;
	}
	public function setAtivo ($ativo)
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
	public function setFonte ($fonte)
    {
        $this->fonte=$fonte;      
    }
    public function getFonte ()
    {
        return $this->fonte;
    }
	public function cadastrar($titulo, $descricao, $autor, $ativo, $imagem, $fonte){
        $this->setDescricao($descricao);
        $this->setAutor($autor);
        $this->setTitulo($titulo);
        $this->setAtivo($ativo);

        $this->setFonte($fonte);

        $this->setImagem($imagem[0]);
        echo "Imagem: ". $this->getImagem();
        
        $destino = "../../site/view/imagens/" . $this->getImagem();
        $arquivo_tmp = $imagem[1];
        echo "<br>Destino: " . $destino;
        echo "<br>TMP: " . $arquivo_tmp;
        //exit;

		$dataCadastro = date("Y-m-d h:m:s");
        $this->setDataCadastro($dataCadastro);


        $sql = "SELECT * from noticia WHERE titulo = '{$this->getTitulo()}'";
        include ("Conexao.php");
        $query = $conectar->query($sql);
       	$registros = $conectar->affected_rows;

        if($registros == 1){
            header("location: ../view/index.php?pagina=formNoticia.php&mensagem=NoticiaExiste");
        }else{
            echo $sqlInsert = "insert into noticia 
            (titulo, descricao, autor, ativo, imagem, fonte, dataCadastro) VALUE
             ('{$this->getTitulo()}',
             '{$this->getDescricao()}',
             '{$this->getAutor()}',
             '{$this->getAtivo()}',
             '{$this->getImagem()}',
             '{$this->getFonte()}',
             '{$this->getDataCadastro()}')";
            //exit;
            $d_noticia = $conectar->query($sqlInsert);
            $registros = $conectar->affected_rows;

            if($registros == 1){
                $mover = move_uploaded_file( $arquivo_tmp, $destino);
                header("Location: ../view/index.php?pagina=formNoticia.php&acao=listar&mensagem=sucesso");
            }else{
                //echo "erro";
                header("location: ../view/index.php?pagina=formNoticia.php&acao=listar&mensagem=erro");
            }
        }
    }

    public function alterar($id, $titulo, $descricao, $autor, $ativo, $imagem, $fonte){
        $this->setId($id);
        $this->setDescricao($descricao);
        $this->setAutor($autor);
        $this->setTitulo($titulo);
        $this->setAtivo($ativo);
        $this->setFonte($fonte);
 		
        $this->setImagem($imagem[0]);
        echo "Imagem: ". $this->getImagem();
        
        $destino = "../../site/view/imagens/" . $this->getImagem();
        $arquivo_tmp = $imagem[1];
        echo "<br>Destino: " . $destino;
        echo "<br>TMP: " . $arquivo_tmp;
        

       $sql = "update noticia set descricao= '{$this->getDescricao()}', autor= '{$this->getAutor()}', titulo= '{$this->getTitulo()}', imagem= '{$this->getImagem()}', fonte = '{$this->getFonte()}', ativo= '{$this->getAtivo()}' WHERE id = '{$this->getId()}'";
        include ("Conexao.php");
      
        $query = $conectar->query($sql);
        $registros = $conectar->affected_rows;

        if($registros == 1){
            $mover = move_uploaded_file( $arquivo_tmp, $destino);
            header("location: ../view/index.php?pagina=formNoticia.php&acao=listar&mensagem=sucesso");
        }else{
            header("location: ../view/index.php?pagina=formNoticia.php&acao=listar&mensagem=erro");
        }
    }

    public function buscaDados($id){
        $this->setId($id);


        $sql = "SELECT * from noticia WHERE id = '{$this->getId()}'";
        include ("conexao.php");
        $query = $conectar->query($sql);
        $registros = $query->num_rows;

        if($registros == 1){
            $noticiaArray = array();
            while ($dados_noticia = $query->fetch_array()){
                $noticiaArray= $dados_noticia;
            }   
            return $noticiaArray;
        }else{
            header("location: ../view/formNoticia.php?mensagem=erro");
        }

    }
    public function buscaTodosDados(){
        $sql = "SELECT * from noticia";
        include ("Conexao.php");
        $query = $conectar->query($sql);
        $registros = $query->num_rows;

        if($registros > 0){
            $noticiaArray = array();
            while ($dados_noticia = $query->fetch_assoc()){
                $noticiaArray[]= $dados_noticia;
            }
            return $noticiaArray;
        }else{
            header("location: ../view/formNoticia.php?mensagem=erro");
        }
    }

}

?>