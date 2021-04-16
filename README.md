# Sito Conti Eden Project
Sito di prenotazione prodotti per azienda ortofrutticola locale
## Idea
_L'idea è di creare un sito interattivo che permetta ad un azienda di prodotti ortofrutticoli locale e ai suoi clienti di gestire le prenotazioni sui propri prodotti, per poi acquistarli direttamente in negozio oppure farseli consegnare a domicilio_
***
## Il sito dovrà avere la seguente struttura:
  * **Homepage**:
    * L'homepage dovrà contenere:
      * Il logo aziendale  
      * Una barra di ricerca, dove l'utente può cercare un prodotto scrivendo il suo nome
      * Le categorie principali in cui sono divisi i prodotti in vendita
      * I prodotti in evidenza in quel momento
      * Una sezione in cui fare login e registrarsi
      * Una sezione di informazioni su azienda e contatti
  * **Ricerca**:
    * Una volta effettutata una ricerca l'utente deve poter:
      * Filtrare i prodotti per tipologia, quantità disponibile e prezzo (al kg)
      * Entrare nella scheda prodotto
  * **Scheda prodotto**:
    * Nella scheda prodotto ci dovrà essere:
      * La quantità disponibile del prodotto al momento
      * Un selezionatore per scegliere la quantità desiderata
      * Una descrizione del prodotto
      * La possibilità di aggiungerlo al carrello (solo dopo aver selezionato la quantità)
  * **Carrello**:
    * Nel carrello ci dovrà essere:
      * La lista dei prodotti selezionati, con le relative quantità
      * Una checkbox per dire se si vuole ordinare da asporto o per consegna
      * Un tasto per effettuare l'ordine
  * **Sezione personale Utente**:
    * Nella sezione profilo dell'utente sarà presente:
      * La sezione dati personali (nome, cognome, mail, password, indirizzo, etc.)
      * Le sezione Ordini effettutati, così suddivisa:
        * Storico ordini, contenente i vecchi ordini effettuati dall'utente, sotto ognuno dovrà esserci il tasto 'ripeti ordine'
        * Ordini in corso, in cui viene ricordata la data in cui deve venire a prendere i prodotti (se asporto) o la data di consegna (se consegna)
  * **L'azienda**
    * Questa sezione dovrà contenere:
      *  Una piccola descrizione sulla storia e l'idea della azienda
      *  Una sezione contatti (con numero di telefono, mail, etc.)
***
## Il sito dovrà essere utilizzato:
* [Lato Cliente](#lato-cliente)
* [Lato Azienda](#lato-azienda)

## Lato Cliente
  ### Funzionalità da implementare
  1. [Registrazione e login](#registrazione-e-login)
  2. [Profilo](#profilo)
  3. [Ordini](#ordini)
  4. [Ricerca prodotti](#ricerca-prodotti)
  5. [Gestione carrello](#gestione-carrello)
#### Registrazione e login
L'utente deve poter registrarsi al sito prima di poter fare prenotazioni, ed effettuare il login in qualunque momento
#### Profilo
L'utente deve poter consultare il suo profilo, cambiare i propri dati personali e la propria password e consultare i suoi ordini
#### Ordini
L'utente deve poter consultare i suoi ordini effettuati nel tempo, e se lo desidera deve poter effettuare di nuovo un suo vecchio ordine
#### Ricerca prodotti
L'utente deve poter ricercare tra i prodotti quelli che desidera filtrando per categoria, nome e caratteristiche
#### Gestione carrello
L'utente deve poter riempire il carrello con i prodotti selezionati, dal carrello ci sarà la possibilità di prenotare i prodotti, in due modalità: Asporto o Consegna

## Lato Azienda
  ### Funzionalità da implementare
  1. [Controllo prenotazioni](#controllo-prenotazioni)
      - [Prenotazioni asporto](#prenotazioni-asporto)
      - [Prenotazioni consegna](#prenotazioni-consegna)   
  2. [Aggiornamento disponibilità](#aggiornamento-disponibilità)
  3. [Prodotti in evidenza](#prodotti-in-evidenza)

#### Controllo prenotazioni
##### Prenotazioni asporto
L'azienda deve poter tener conto di tutte le prenotazioni, con nome cliente, lista dell'ordine (prodotto/quantità) e giorno di arrivo del cliente per l'asporto
##### Prenotazioni consegna
L'azienda deve poter tener conto di tutte le prenotazioni, con nome cliente, lista dell'ordine (prodotto/quantità), indirizzo del cliente che ha effettuato l'ordine, e preferenza sul momento di consegna
#### Aggiornamento disponibilità
L'azienda deve poter:
  * aggiornare le disponibilità di un prodotto
  * inserire un nuovo prodotto, con nome, descrizione, categoria e quantità
  * rimuovere un prodotto dalle disponibilità
#### Prodotti in evidenza
L'azienda deve poter, in ogni momento, aggiornare la sezione 'prodotti in evidenza' con i prodotti che desidera
