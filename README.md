# tcc-portal_nutricao
😁 Acesse o site : https://davidsoaress.github.io/tcc-portal_nutricao/


/*


int ledVerde=5;
int ledVermelho=7;
int ledAmarelo=6;
int botao=8;
int estadoBotao;

int ledPedVerde = 1;
int ledPedVermelho=2;

int cont=0;

void setup()
{
  
  pinMode(ledVerde, OUTPUT);
  pinMode(ledVermelho, OUTPUT);
  pinMode(ledAmarelo, OUTPUT);
  pinMode(botao, INPUT);
  pinMode(ledPedVermelho, OUTPUT);
  pinMode(ledPedVerde, OUTPUT);
  
}

void loop()
{
  digitalWrite(ledVerde, HIGH);
  digitalWrite(ledPedVermelho, HIGH);

  estadoBotao = digitalRead(botao);
  
  if(estadoBotao == HIGH){
    
    while(cont<5){

      
      
      delay(3000);

      digitalWrite(ledVerde, LOW);

      digitalWrite(ledAmarelo, HIGH);
      delay(2000);
      digitalWrite(ledAmarelo, LOW);

      digitalWrite(ledVermelho, HIGH);
      digitalWrite(ledPedVermelho, LOW);
      digitalWrite(ledPedVerde, HIGH);
      delay(4000);

      for(int i=0; i<10; i++){

        digitalWrite(ledPedVerde, HIGH);
        delay(1000);
        digitalWrite(ledPedVerde, LOW);
        delay(1000);
      }

      digitalWrite(ledVermelho, LOW);

      cont++;
    }
    
  }
  
  
  
}

*/
