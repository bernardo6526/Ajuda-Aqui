
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
					$this->exibicao .= "<td>".$this->row["uf"]."</td>";
					$this->exibicao .= "<td>".$this->row["cidade"]."</td></tr>";
					
				}
				
				$this->exibicao .= "</tbody>
			</table>
		</div>";
		return utf8_encode($this->exibicao);
		
		
	}
}

?>
