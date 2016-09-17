
<?php

class relatorioBLL 
{
	private $result;
	private $qtdeLinhas;
	private $row;
	public $exibicao;
	private $sql;
	private $bd;
	
	public function __construct() 
	{
		
		require_once("../DAL/conexao.php");
		$this->bd = new banco("ajudaaqui");
		header("Content-type: text/html; charset=utf-8");
		
		
		
	}


	public function pesqClinica($sql)
	{
		
		$this->sql = $sql;
		$this->result=mysqli_query($this->bd->conexaobd,$this->sql);
		$this->qtdeLinhas = mysqli_num_rows($this->result);
		
		
		$this->exibicao =	"<div class='container'>
		<h2>Clínica</h2>
		
		<table class='table'>
			<thead>
				<tr>
					<th>Nome</th>
					<th>Nota</th>
					<th>Telefone</th>
					<th>UF</th>
					<th>Cidade</th>
				</tr>
			</thead>
			<tbody>";

				for($x=0; $x < $this->qtdeLinhas; $x++)
				{
					$this->row=mysqli_fetch_assoc($this->result);
					$this->exibicao .= "<tr><td>".$this->row["nome"]."</td>";
					$this->exibicao .= "<td>".$this->row["nota"]."</td>";
					$this->exibicao .= "<td>".$this->row["telefone"]."</td>";
					$this->exibicao .= "<td>".$this->row["uf"]."</td>";
					$this->exibicao .= "<td>".$this->row["cidade"]."</td></tr>";
					
				}
				
				$this->exibicao .= "</tbody>
			</table>
		</div>";
		return utf8_encode($this->exibicao);
		
		
	}
	public function pesqAssistente($sql)
	{
		
		$this->sql = $sql;
		$this->result=mysqli_query($this->bd->conexaobd,$this->sql);
		$this->qtdeLinhas = mysqli_num_rows($this->result);
		
		
		$this->exibicao =	"<div class='container'>
		<h2>Clínica</h2>
		
		<table class='table'>
			<thead>
				<tr>
					<th>Nome</th>
					<th>Nota</th>
					<th>Telefone</th>
					<th>Email</th>
					<th>Tipo</th>
					<th>Certificado</th>
					<!--<th>Clínica</th>-->
					<th>UF</th>
					<th>Cidade</th>
				</tr>
			</thead>
			<tbody>";

				for($x=0; $x < $this->qtdeLinhas; $x++)
				{
					$this->row=mysqli_fetch_assoc($this->result);
					$this->exibicao .= "<tr><td>".$this->row["nome"]."</td>";
					$this->exibicao .= "<td>".$this->row["nota"]."</td>";
					$this->exibicao .= "<td>".$this->row["telefone"]."</td>";
					$this->exibicao .= "<td>".$this->row["email"]."</td>";
					$this->exibicao .= "<td>".$this->row["tipo"]."</td>";
					$this->exibicao .= "<td>".$this->row["certificado"]."</td>";
					 
					$this->exibicao .= "<td>".$this->row["uf"]."</td>";
					$this->exibicao .= "<td>".$this->row["cidade"]."</td></tr>";
					
				}
				
				$this->exibicao .= "</tbody>
			</table>
		</div>";
		return utf8_encode($this->exibicao);
		
		
	}
	public function pesqCliente($sql)
	{
		
		$this->sql = $sql;
		$this->result=mysqli_query($this->bd->conexaobd,$this->sql);
		$this->qtdeLinhas = mysqli_num_rows($this->result);
		
		
		$this->exibicao =	"<div class='container'>
		<h2>Clínica</h2>
		
		<table class='table'>
			<thead>
				<tr>
					<th>Id</th>
					<th>Nome</th>			
					<th>Telefone</th>
					<th>Email</th>
					<th>Nascimento</th>
					<th>Tipo</th>
					<th>CPF</th>
					<th>RG</th>
					<th>UF</th>
					<th>Cidade</th>
					<th>CEP</th>
					<th>Bairro</th>
					<th>Logradouro</th>
					<th>Número</th>
					<th>Complemento</th>
				</tr>
			</thead>
			<tbody>";

				for($x=0; $x < $this->qtdeLinhas; $x++)
				{
					$this->row=mysqli_fetch_assoc($this->result);
					$this->exibicao .= "<tr><td>".$this->row["id"]."</td>";
					$this->exibicao .= "<td>".$this->row["nome"]."</td>";
					$this->exibicao .= "<td>".$this->row["telefone"]."</td>";
					$this->exibicao .= "<td>".$this->row["email"]."</td>";
					$this->exibicao .= "<td>".$this->row["nascimento"]."</td>";
					$this->exibicao .= "<td>".$this->row["tipo_deficiencia"]."</td>";
					$this->exibicao .= "<td>".$this->row["cpf"]."</td>";
					$this->exibicao .= "<td>".$this->row["rg"]."</td>";
					$this->exibicao .= "<td>".$this->row["uf"]."</td>";
					$this->exibicao .= "<td>".$this->row["cidade"]."</td>";
					$this->exibicao .= "<td>".$this->row["cep"]."</td>";
					$this->exibicao .= "<td>".$this->row["bairro"]."</td>";
					$this->exibicao .= "<td>".$this->row["logradouro"]."</td>";
					$this->exibicao .= "<td>".$this->row["numero"]."</td>";
					$this->exibicao .= "<td>".$this->row["complemento"]."</td></tr>";
				}
				
				$this->exibicao .= "</tbody>
			</table>
		</div>";
		return utf8_encode($this->exibicao);
		
		
	}
	
}

?>
