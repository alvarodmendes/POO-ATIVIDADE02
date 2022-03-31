<?php

class Produto{

    private $descricao;
    private $estoque;
    private $preco;
    
    public function aumentarestoque($valor){
        $this->estoque += $valor;
        if (!is_numeric ($valor)){
            echo "não é numérico <br> ";
        }
    // Verificar valor tem que ser númerico, se não for núemrico, irá aparecer "não é numérico"
        
        elseif ($valor > 0 && $valor < 250) {
                $this->estoque += $valor;
        } 
    // Verificar valor tem q ser maior que 0 e menor que 250
      
        elseif ($valor > 250) {
            echo "valor muito alto <br>";
        }
    // Verificar valor maior que 250, irá aparecer "valor muito alto"        
       
        else {
            echo "valor inválido <br> ";
    // Verificar valor q n esteja entre 0 e 250, irá aparecer "valor inválido"
        }
             
    }
    
    
    public function diminuirestoque($valor){
        $this->estoque -= $valor;
        if (!is_numeric ($valor)){
            echo "não é numérico <br> ";
        }
    // Verificar valor tem que ser númerico, se não for núemrico, irá aparecer "não é numérico"        
       
        elseif ($valor > 0 && $valor < 250) {
                $this->estoque -= $valor;
        } 
     // Verificar valor tem q ser maior que 0 e menor que 250          
        
        elseif ($valor > 250) {
            echo "valor muito alto <br> ";
        }
     // Verificar valor maior que 250, irá aparecer "valor muito alto"        
        else {
            echo "valor inválido <br> ";
        }
    // Verificar valor q n esteja entre 0 e 250, irá aparecer "valor inválido"
    }
    
    
    public function ReajustarPreco($percentual){
        
        if (!is_numeric ($percentual)){
                echo "não é numérico <br> ";
    // Verificar valor tem que ser númerico, se não for núemrico, irá aparecer "não é numérico"   
            
        } elseif ($percentual >=0) {                 
    // Erro, valor tem que ser maior que 0
            
        } elseif ($percentual >= 150) {
            echo "valor muito alto <br>";
    // Verificar valor maior que 150, irá aparecer "valor muito alto" 
        } else {
            $this->preco += ($percentual*$this->preco)/100;
            
            
            
        }
        
    }
    public function getDescricao (){
        return $this->descricao;    
    }
 
     public function setDescricao($desc){
        $this->descricao = $desc;
 
    }

    public function getEstoque (){
        return $this->estoque;    
    }
 
     public function setEstoque($est){
        $this->estoque = $est;

     }
    public function getPreco(){
        return $this->preco;    
    }
 
     public function setPreco($prec){
        $this->descricao = $prec;
 
    }
 
           
}

    $cadastro = new Produto();
    $cadastro->setDescricao("Produto Alvaro");
    echo " Novos Valores: ";
    echo "<br>";
    $cadastro->setPreco(20);
    $cadastro->aumentarestoque(12);
    echo "Estoque: ".$cadastro->getEstoque();
    echo "<br>";
    $cadastro->diminuirestoque(5);
    echo "Estoque: ".$cadastro->getEstoque();
    echo "<br>";
    $cadastro->reajustarpreco(100);
    echo "Preço reajustado: ".$cadastro->getPreco();

