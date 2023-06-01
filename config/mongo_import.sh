#!/bin/bash
env 
echo "Sleeping 5 seconds..."
sleep 5

echo "Importing data..."
mongoimport -u $MONGO_INITDB_ROOT_USERNAME -p $MONGO_INITDB_ROOT_PASSWORD --db nosqlinj --collection users --host mongodb:27017 --authenticationDatabase admin --jsonArray /tmp/usersdb.json

echo "All done!"