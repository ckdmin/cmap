FROM php:8.2-cli

# 환경변수 PORT를 사용하도록 변경
CMD ["sh", "-c", "php -S 0.0.0.0:${PORT:-8000} -t ."]
