Projeto em andamento
Criação de CRUD em PHP utilizando banco de dados MySql.

# Nesse projeto não estou usando caneta bic pra desclassificar ninguém.
# Aqui eu uso a cabeça para desenvolver a aplicação e não a GUELA acompanhada da má intenção.

# agenda-telefonica-php

Implementação de uma agenda telefônica que atenda aos seguintes requisitos técnicos e de 
 negócios:
 - Use PHP puro, jQuery e Bootstrap
 - Use a arquitetura MVC e Rest
 - O site deve ser responsivo
 - A agenda deve possuir telas de cadastro e CRUD de contatos
 - Os campos devem possuir mascara de validação de dados no front e back
 - Crie uma área administrativa com dashboard e gráficos que considerar pertinentes a 
um administrador do negócio


/*
	
	Empresa MadeiraMadeira
	Sensacional a ideologia e estrutura da empresa.
	O gestor que fez a entrevista é desligado totalmente das "formalidades";
	Melhor entrevista que eu já fui.
	
	Parecia que eu já era da empresa.
	Porém não passei devido a minha limitação.
	
	O meu erro foi não fazer corretamente o teste de mesa apresentado pelo gestor.
	
	Eu gostei muito, pois ele me fez uma crítica construtiva.
	
	O teste consistia na seguite situação:
	criar uma função passando um valor N e retornando a soma dos primeiros 
	ímpares anteriores a este número N;
	
	Na hora eu não consegui fazer, devido a minha afobação;
	Estou focado em melhorar isso em mim.
	
	Agradeço ao feedback da madeiramadeira.
	
	TESTE DE LÓGICA DE PROGRAMAÇÃO
	

*/

function getSumImpares (N : Integer) : Integer
var
  vindex, vSum, vCountImpar : Integer;
begin
  
  vindex      := 0;
  vSum        := 0;
  vCountImpar := 0;  

  while true do
  begin

     if (vindex mod 2) <> 0 then
     begin
       vSum := vSum + vindex;
       inc(vCountImpar);
     end;

     inc(vindex);

     if (vCountImpar = N) then
       break;	

  end;

  result := vSum; 

end;
