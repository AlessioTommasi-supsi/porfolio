#!/bin/bash

# Definisci un file di log per salvare i cambiamenti locali
LOG_FILE="local_changes.log"

# Aggiungi tutti i file cambiati all'area di staging
git add *

# Controlla se ci sono cambiamenti locali da commettere
if ! git diff-index --quiet HEAD --; then
  # Salva una lista di tutti i file modificati, aggiunti o rimossi
  git status --short > "$LOG_FILE"
  
  # Salva le differenze (diff) tra il commit attuale e i cambiamenti non committati
  git diff >> "$LOG_FILE"

  # Effettua il commit dei cambiamenti locali
  git commit -a -m "local file server commit message"
  
  echo "Cambiamenti locali salvati in $LOG_FILE e committati."
else
  echo "Nessun cambiamento locale da commettere."
fi

# Fetch dal branch principale (main)
git fetch origin main

# Esegui il merge con il branch remoto usando la strategia 'theirs'
git merge -s recursive -X theirs origin/main

# Se non ci sono cambiamenti locali, esegui una pull
if git diff-index --quiet HEAD --; then
  git pull origin main
fi