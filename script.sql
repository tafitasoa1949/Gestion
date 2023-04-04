
create database gestion;

use gestion 

create table users(
     id int primary key auto_increment not null,
     name text,
     email text not null,
     contact int not null,
     mdp varchar(50) not null
);

create table entreprise(
     id int primary key auto_increment not null,
     idUser int not null,
     nom varchar(200) not null,
     objet varchar(200) not null,
     siege varchar(100) not null,
     Adresse_d_exploitation varchar(200),
     nom_dirigeant varchar(200) not null,
     date_creation datetime not null,
     numero_identification int not null,
     numero_statistique int not null,
     numero_registre_commerce int not null,
     status varchar(300),
     foreign key (idUser) references users(id)  
);

create table plan(
     numero int primary key not null,
     idEntreprise int not null,
     intitule varchar(200) not null,
     foreign key (idEntreprise) references entreprise(id)
);

create table montant(
     devise varchar(50) primary key not null,
     idEntreprise int not null,
     devise_equivalence numeric(13,4) default 0 not null,
     foreign key (idEntreprise) references entreprise(id)
);

create table exercice(
     id int primary key auto_increment not null,
     idEntreprise int not null,
     nom varchar(200) not null,
     debut datetime not null,
     fin datetime not null,
     foreign key (idEntreprise) references entreprise(id)
);

create table ecriture(
     id int primary key auto_increment not null,
     idExercice int not null,
     daty datetime not null,
     libelle varchar(200) not null,
     refer varchar(100),
     foreign key (idExercice) references exercice(id)
);

create table mouvement(
     idEcriture int not null,
     compte int not null,
     tiers varchar(100) not null,
     debit numeric(15,4) default 0 not null,
     credit numeric(15,4) default 0 not null,
     quantite numeric(15,4) not null,
     taux numeric(15,4) not null,
     devise varchar(50) not null,
     foreign key (devise) references  montant(devise),
     foreign key (compte) references  plan(numero),
     foreign key (idEcriture) references  ecriture(id)
);

select 
create or replace view grandlivre as 
select e.daty,m.compte,e.libelle,m.quantite,m.debit,m.credit,e.refer,m.devise,e.idExercice
from mouvement as m join ecriture as e on e.id=m.idEcriture order by e.daty desc;


create or replace view v_balance as 
select e.idExercice,m.compte,plan.intitule,sum(m.debit) as totaldebit,sum(m.credit) as totalcredit from mouvement as m 
join ecriture as e on e.id = m.idEcriture 
join plan on plan.numero = m.compte
 group by m.compte;

 select en.nom,e.nom as exercice,e.debut,e.fin from exercice as e join entreprise as en on en.id=e.idEntreprise  where e.id=1;

create or replace view v_solde_debiteur as 
select idExercice,compte,(totaldebit-totalcredit) as soldedebiteur from v_balance group by compte;

create or replace view v_solde_crediteur as 
select idExercice,compte,(totalcredit-totaldebit) as soldecrediteur from v_balance group by compte;

create or replace view ball as 
select balance.idExercice,balance.compte,balance.intitule,balance.totaldebit,balance.totalcredit,d.soldedebiteur,c.soldecrediteur 
from v_solde_debiteur as d join v_solde_crediteur as c join v_balance as balance;

create or replace view total_balance as 
select idExercice,sum(totaldebit) as debit,sum(totalcredit) as credit,sum(soldedebiteur) as soldedebit,sum(soldecrediteur) as soldecredit from ball;

