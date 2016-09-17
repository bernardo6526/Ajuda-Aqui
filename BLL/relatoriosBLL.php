<?php

class relatorioBLL 
{
	function __construct() {
		require_once("../DAL/conexao.php");
		$bd = new banco("ajudaaqui");
	}


	function pesqCliente($tabela,$sql)
	{
		
		$this->$result=mysqli_query($bd->conexaobd,$sql);
		$this->$qtdeLinhas = mysqli_num_rows($result);
		$this->$row=mysqli_fetch_assoc($result);

		$this->$exibicao =	"<div class='container'>
		<h2>$tabela</h2>
		
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

				for($x=0; $x < $qtdeLinhas; $x++)
				{
					
					$this->$exibicao .= "<tr><td>".$row["nome"]."</td>";
					$this->$exibicao .= "<td>".$row["nota"]."</td>";
					$this->$exibicao .= "<td>".$row["uf"]."</td>";
					$this->$exibicao .= "<td>".$row["cidade"]."</td></tr>";
					
				}
				
				$this->$exibicao .= "</tbody>
			</table>
		</div>";
		return $this->$exibicao;
		
		
	}
}