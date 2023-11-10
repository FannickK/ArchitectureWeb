CREATE TABLE Clients (
    ID_Client INT PRIMARY KEY,
	ID_Conseiller INT,
    Prénom VARCHAR(50),
    Nom VARCHAR(50),
    Adresse VARCHAR(100),
    Telephone VARCHAR(20),
    Email VARCHAR(50),
    DOB DATE,
    Situation_F VARCHAR(20),
	FOREIGN KEY (ID_Conseiller) REFERENCES Conseillers(ID_Conseiller)
);

CREATE TABLE Comptes (
    ID_Compte INT PRIMARY KEY,
    ID_Agence INT,
    ID_Client INT,
    Type_Compte VARCHAR(50),
    Solde DECIMAL(10, 2),
    Date_Ouverture DATE,
    FOREIGN KEY (ID_Agence) REFERENCES Agences(ID_Agence),
    FOREIGN KEY (ID_Client) REFERENCES Clients(ID_Client)
);

CREATE TABLE Lignes_Comptes (
    ID_Ligne_Compte INT PRIMARY KEY,
    ID_Compte INT,
    Historique_Transactions TEXT,
    Montant DECIMAL(10, 2),
    Date_Transaction DATE,
    Heure_Transaction TIME,
    FOREIGN KEY (ID_Compte) REFERENCES Comptes(ID_Compte)
);

CREATE TABLE Agences (
    ID_Agence INT PRIMARY KEY,
    Nom_Agence VARCHAR(100),
    Adresse VARCHAR(150),
    Ville VARCHAR(50),
    Code_Postal VARCHAR(15),
    Pays VARCHAR(50)
);

CREATE TABLE Conseillers (
    ID_Conseiller INT PRIMARY KEY,
    ID_Agence INT,
    Prénom VARCHAR(50),
    Nom VARCHAR(50),
    Email VARCHAR(100),
    Telephone VARCHAR(20),
    FOREIGN KEY (ID_Agence) REFERENCES Agences(ID_Agence)
);


INSERT INTO Clients (ID_Client, ID_Conseiller, Prénom, Nom, Adresse, Telephone, Email, DOB, Situation_F)
VALUES
(1, 301, 'John', 'Doe', '123 Main St', '555-1234', 'john.doe@email.com', '1990-01-01', 'Célibataire'),
(2, 301, 'Jane', 'Smith', '456 Oak St', '555-5678', 'jane.smith@email.com', '1985-05-15', 'Marié'),
(3, 301, 'Michael', 'Johnson', '789 Elm St', '555-1111', 'michael.johnson@email.com', '1980-03-10', 'Célibataire'),
(4, 302, 'Emily', 'Williams', '654 Pine St', '555-2222', 'emily.williams@email.com', '1995-07-22', 'Célibataire'),
(5, 302, 'Daniel', 'Taylor', '987 Birch St', '555-3333', 'daniel.taylor@email.com', '1988-11-05', 'Divorcé'),
(6, 302, 'Sophia', 'Davis', '321 Cedar St', '555-4444', 'sophia.davis@email.com', '1975-06-15', 'Marié'),
(7, 303, 'Oliver', 'Moore', '852 Maple St', '555-5555', 'oliver.moore@email.com', '1992-09-30', 'Célibataire'),
(8, 303, 'Natalie', 'Clark', '963 Walnut St', '555-6666', 'natalie.clark@email.com', '1987-04-18', 'Marié'),
(9, 303, 'Ella', 'Anderson', '147 Oak St', '555-7777', 'ella.anderson@email.com', '1982-08-25', 'Célibataire'),
(10, 303, 'David', 'Hill', '258 Pine St', '555-8888', 'david.hill@email.com', '1993-12-05', 'Marié');

INSERT INTO Comptes (ID_Compte, ID_Agence, ID_Client, Type_Compte, Solde, Date_Ouverture)
VALUES
(101, 201, 1, 'Épargne', 8000.00, '2021-12-01'),
(102, 202, 2, 'Chèques', 1500.00, '2021-11-15'),
(103, 201, 3, 'Épargne', 6000.00, '2022-01-20'),
(104, 201, 4, 'Chèques', 2000.00, '2022-02-10'),
(105, 202, 5, 'Chèques', 3000.00, '2022-03-05'),
(106, 203, 6, 'Épargne', 4500.00, '2022-04-15'),
(107, 201, 7, 'Chèques', 1200.00, '2022-05-20'),
(108, 202, 8, 'Épargne', 3500.00, '2022-06-25'),
(109, 203, 9, 'Chèques', 5000.00, '2022-07-30'),
(110, 202, 10, 'Épargne', 2000.00, '2022-08-05');

INSERT INTO Lignes_Comptes (ID_Ligne_Compte, ID_Compte, Historique_Transactions, Montant, Date_Transaction, Heure_Transaction)
VALUES
(1001, 101, 'Dépôt mensuel', 1000.00, '2022-01-01', '09:00:00'),
(1002, 102, 'Achat en ligne', -200.00, '2022-01-02', '12:30:00'),
(1003, 103, 'Retrait ATM', -100.00, '2022-01-05', '15:45:00'),
(1004, 104, 'Dépôt de salaire', 2500.00, '2022-02-01', '10:00:00'),
(1005, 105, 'Paiement de facture', -150.00, '2022-02-05', '14:15:00'),
(1006, 106, 'Virement entrant', 500.00, '2022-03-10', '11:30:00'),
(1007, 107, 'Achat au supermarché', -50.00, '2022-03-15', '13:45:00'),
(1008, 108, 'Remboursement de prêt', 1000.00, '2022-04-01', '09:30:00'),
(1009, 109, 'Virement sortant', -300.00, '2022-04-10', '12:00:00'),
(1010, 110, 'Dépôt surprise', 200.00, '2022-05-01', '08:00:00');

INSERT INTO Agences (ID_Agence, Nom_Agence, Adresse, Ville, Code_Postal, Pays)
VALUES
(201, 'Agence Sud', '123 Walnut St', 'Villageville', '67890', 'USA'),
(202, 'Agence Est', '456 Cedar St', 'Hamletville', '23456', 'USA'),
(203, 'Agence Ouest', '789 Pine St', 'Cityville', '12345', 'USA');

INSERT INTO Conseillers (ID_Conseiller, ID_Agence, Prénom, Nom, Email, Telephone)
VALUES
(301, 201, 'Alex', 'Miller', 'alex.miller@email.com', '555-7777'),
(302, 202, 'Grace', 'Roberts', 'grace.roberts@email.com', '555-8888'),
(303, 203, 'David', 'Hill', 'david.hill@email.com', '555-9999');