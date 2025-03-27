# PHP TXT to JSON script

[![PHP 7.4](https://img.shields.io/badge/PHP-7.4-blue.svg)](https://www.php.net/)
[![Docker](https://img.shields.io/badge/Docker-Available-blue.svg)](https://www.docker.com/)

A PHP script that converts text input parameters into a JSON string format.

## Prerequisites

- PHP 7.4 or higher
- Docker (optional, for containerized execution)

## File Structure

```
.
├── LICENSE.md
├── README.md
├── .gitignore
└── src/
    └── solve.php
```

## Installation

Clone the repository:

```bash
git clone git@github.com:luismr/php-txt-to-json-script.git
cd php-txt-to-json-script
```

## Running Instructions

### macOS/Linux

```bash
php src/solve.php [Calories] [Proteins] [Fats] [Carbohydrates]
```

### Windows

```bash
php src\solve.php [Calories] [Proteins] [Fats] [Carbohydrates]
```

### Docker

Using the official PHP CLI image:

```bash
docker run --rm -v $(pwd):/app -w /app php:7.4-cli php src/solve.php [Calories] [Proteins] [Fats] [Carbohydrates]
```

## Input Parameters

The script accepts four parameters:

- `Calories`: Integer value between 0 and 10000
- `Proteins`: Integer value between 0 and 10000
- `Fats`: Integer value between 0 and 10000
- `Carbohydrates`: Integer value between 0 and 10000

All parameters are required and must be valid integers within the specified range.

### Example Usage

```bash
php src/solve.php 100 30 40 30
```

Output:
```json
{"Calories":100,"Proteins":30,"Fats":40,"Carbohydrates":30}
```

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

## Error Handling

The script includes comprehensive error handling for:
- Invalid input types
- Values outside the allowed range (0-10000)
- JSON encoding errors

Error messages are descriptive and will help identify the specific issue with the input parameters. 