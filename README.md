# ipiteam

## BASE DE DONNEES :

Créer la base de donnée à l'aide du fichier install/ipiteam_aggouneaudemard.sql

```sql
mysql < install/ipiteam_aggouneaudemard.sql
CREATE USER 'ipimanager'@'localhost' IDENTIFIED BY 'ipiteam';
GRANT ALL PRIVILEGES ON ipiteam_aggouneaudemard . * TO 'ipiteam'@'localhost';
FLUSH PRIVILEGES;
```

### CHAT :
```
npm install lightbox2 --save
cd chat
npm install --save
npm install --save express@4.15.2
npm install --save socket.io
node index
```
