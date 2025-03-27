# PHP TXT to JSON script

[![PHP 7.4](https://img.shields.io/badge/PHP-7.4-blue.svg)](https://www.php.net/)
[![Docker](https://img.shields.io/badge/Docker-Available-blue.svg)](https://www.docker.com/)

A PHP script that converts text input parameters into a JSON string format, ensuring proper type handling and validation for nutritional information data.

## Overview

This script takes nutritional information parameters as input and converts them into a properly formatted JSON string. It includes validation for input types and ranges, ensuring data integrity and proper JSON formatting.

## Prerequisites

- PHP 7.4 or higher
- Git (for cloning the repository)
- Docker (optional, for containerized execution)

## File Structure

```
.
├── LICENSE.md          # MIT License details
├── README.md          # Project documentation
├── .gitignore         # Git ignore rules
└── src/
    └── solve.php      # Main script implementation
```

## Installation

1. Clone the repository:
```bash
git clone git@github.com:luismr/php-txt-to-json-script.git
```

2. Navigate to the project directory:
```bash
cd php-txt-to-json-script
```

## Usage

The script accepts four integer parameters representing nutritional information:

### Parameters

| Parameter | Type | Range | Description |
|-----------|------|-------|-------------|
| Calories | Integer | 0-10000 | Total calories value |
| Proteins | Integer | 0-10000 | Protein content in grams |
| Fats | Integer | 0-10000 | Fat content in grams |
| Carbohydrates | Integer | 0-10000 | Carbohydrate content in grams |

### Running the Script

#### macOS/Linux
```bash
php src/solve.php [Calories] [Proteins] [Fats] [Carbohydrates]
```

#### Windows
```bash
php src\solve.php [Calories] [Proteins] [Fats] [Carbohydrates]
```

#### Docker
```bash
docker run --rm -v $(pwd):/app -w /app php:7.4-cli php src/solve.php [Calories] [Proteins] [Fats] [Carbohydrates]
```

### Example

Input:
```bash
php src/solve.php 100 30 40 30
```

Output:
```json
{"Calories":100,"Proteins":30,"Fats":40,"Carbohydrates":30}
```

## Error Handling

The script includes comprehensive error handling for:
- Invalid input types (non-numeric values)
- Values outside the allowed range (0-10000)
- Missing parameters
- JSON encoding errors

Error messages are descriptive and will help identify the specific issue with the input parameters.

### Common Error Messages

- "Parameter must be a numeric value"
- "Value must be between 0 and 10000"
- "Missing required parameter"
- "Error creating JSON output"

## Contributing

1. Fork the repository
2. Create your feature branch:
```bash
git checkout -b feature/amazing-feature
```
3. Commit your changes:
```bash
git commit -m 'Add some amazing feature'
```
4. Push to the branch:
```bash
git push origin feature/amazing-feature
```
5. Open a Pull Request

### Development Guidelines

- Follow PSR-12 coding standards
- Add appropriate error handling
- Include unit tests for new features
- Update documentation as needed

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

## Support

For support, please open an issue in the GitHub repository. 