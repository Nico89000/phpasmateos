<?php 
namespace tabapp\tableaux;

class TabStat extends TabStatTrie{
	protected $legende, $entete, $donnees, $total;

	public function __construct($legende,$entete1,$entete2,$entete3) {
		$this->total = 0;
		$this->legende = "Part de marché des navigateurs en décembre 2004";
		$this->entete = [$entete1,$entete2,$entete3];
	}

	public function ajoute($valeur,$nombre){
		$this->donnees[$valeur] = $nombre;
		$this->calcule($nombre);
	}

	public function calcule($nombre){
		$this->total = $this->total + $nombre;
	}

	public function genereEntete(){

		echo "<table><tr>";
		foreach ($this->entete as $key => $value) {
			echo "<td>".$value."</td>";
		}
		echo "</tr>";
	}

	public function genereFin(){
		echo "</table>";
	}

	public function genereCorps(){
		foreach ($this->donnees as $key => $lignes) {
			echo "<tr>";
			echo "<td>".$key."</td>";
			echo "<td>".$lignes."</td>";
			echo "<td>".round($lignes*100/$this->total, 2)."%"."</td>";
			echo "</tr>";
		}
		
	}

	public function genere(){
		$this->trie();
		$this->genereEntete();
		$this->genereCorps();
		$this->genereFin();
	}



}


 ?>