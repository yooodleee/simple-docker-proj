FROM ubuntu:latest

# 기본 페이지 업데이트 및 Apache2, PHP 설치
RUN apt-get update && \
    apt-get install -y apache2 php libapache2-mod-php && \
    apt-get clean

# 웹 파일 복사
COPY index.php /var/www/html/

# Apache 포트 오픈
EXPOSE 80

# Apache 실행 (foreground 모드)
CMD ["apachectl", "-D", "FOREGROUND"]