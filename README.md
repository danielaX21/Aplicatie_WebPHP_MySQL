# ConsultXpert - Aplicație Web PHP + MySQL

Acesta este un proiect realizat pentru disciplina **Sisteme Informatice de Asistare a Deciziilor**, având ca scop dezvoltarea unei aplicații web dinamice folosind PHP și MySQL.

## 📌 Descriere

Proiectul este o aplicație de tip portal servicii/consultanță care permite:

- Adăugarea, editarea și ștergerea feedback-ului utilizatorilor
- Trimiterea de mesaje prin formularul de contact
- Vizualizarea serviciilor disponibile
- Autentificare pentru zona de administrare
- Interfață de administrare cu control complet asupra datelor

Aplicația este construită pe baza unui proiect HTML static anterior, fiind transformată într-o aplicație dinamică cu backend PHP și bază de date relațională.

## ⚙️ Tehnologii folosite

- PHP (cu metode POST, GET, variabile de sesiune)
- MySQL (gestionat prin phpMyAdmin)
- XAMPP (pentru server local)
- HTML, CSS (pentru partea vizuală)
- SQL (comenzi: `INSERT`, `SELECT`, `UPDATE`, `DELETE`, `JOIN`, `GROUP_CONCAT`)

## 🗃️ Structura bazei de date

1. **servicii** – stochează detaliile trimise de utilizatori
2. **feedback** – permite feedback asociat unui serviciu
3. **contact** – mesaje de contact de la utilizatori

## 🔐 Funcționalități principale

- Autentificare cu username/parolă
- Inserare și afișare date din formulare
- Interogări SQL complexe (JOIN, GROUP BY, HAVING)
- Bucla `FOR`, `WHILE`, `DO-WHILE`, `FOREACH` pentru funcționalități dinamice (ex: stele rating, mesaje)

