# Sử dụng PHP phiên bản 8.2 có sẵn Apache
FROM php:8.2-apache

# Cài thêm extension để kết nối MySQL (quan trọng cho fullstack)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy toàn bộ code từ máy tính vào thư mục web của server
COPY . /var/www/html/

# Mở cổng 80 để web chạy
EXPOSE 80