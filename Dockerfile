FROM nginx:alpine

# Copier tous les fichiers du site dans le dossier servi par nginx
COPY . /usr/share/nginx/html

# Nginx écoute sur le port 80 par défaut
EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]