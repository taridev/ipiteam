# ipiteam

## BASE DE DONNEES :

```sql
mysql
source install/ipiteam_aggouneaudemard.sql
CREATE USER 'ipimanager'@'localhost' IDENTIFIED BY 'ipiteam';
GRANT ALL PRIVILEGES ON ipiteam_aggouneaudemard . * TO 'ipimanager'@'localhost';
FLUSH PRIVILEGES;
```

## modules à installer :

télécharger node.js : https://nodejs.org/en/download/

depuis l'invite de commande, se placer dans le repertoire du projet.
```
npm install lightbox2 --save
cd chat
npm install --save
npm install --save express@4.15.2
npm install --save socket.io
node index
```

Pour accéder au compte admin :
- PSEUDO : 'administrator'
- PASSWORD : 'password'

En se connectant au compte admin vous pouvez afficher la page de créations d'événzments en allant à la page : ipiteam/?page=admin&events
