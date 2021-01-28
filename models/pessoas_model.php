<?php 

class Pessoas_model extends CI_Model {
	public function buscaTodos() {
        return $this->db->get("pessoas")->result_array();
    }

    function buscaCodigoNome(){
        $query = $this->db->query('SELECT codigo,nome FROM pessoas');
        $pessoas = $query->result_array();
        
        $pessoasMapeados = [];  
        
        foreach ($pessoas as $pessoa) {  
            $pessoasMapeados[$pessoa['codigo']] = $pessoa['nome']; 
        }

        return $pessoasMapeados;
    }


    public function salva($pessoa) {
    	$this->db->insert("pessoas", $pessoa);
     }
     
     public function atualizar($Codigo)

     {
         $this->db->where('Codigo', $Codigo);
         $query = $this->db->get('pessoas');
         return $query->row();
     }

    public function updateP($data, $Codigo)
    {
    $this->db->where('Codigo', $Codigo);
    $this->db->update('pessoas',$data); 
    }
}