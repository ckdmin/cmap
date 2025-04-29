FROM php:8.2-cli

# 포트 80 열기
EXPOSE 80

# PHP 서버 실행
CMD ["php", "-S", "0.0.0.0:80", "-t", "."]
