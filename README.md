# WhatsApp Solution API Client

[![Latest Version on Packagist](https://img.shields.io/packagist/v/wasolution/api-client.svg?style=flat-square)](https://packagist.org/packages/wasolution/api-client)
[![Total Downloads](https://img.shields.io/packagist/dt/wasolution/api-client.svg?style=flat-square)](https://packagist.org/packages/wasolution/api-client)
[![MIT Licensed](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)

A PHP client for interacting with the WhatsApp Solution API. This package provides a simple and elegant way to send WhatsApp messages through the WASolution platform.

## Requirements

- PHP 7.4 or higher
- Guzzle HTTP Client 7.0 or higher

## Installation

You can install the package via composer:

```bash
composer require wasolution/api-client
```

## Usage

```php
use WASolution\WAClient;

// Initialize the client with your credentials
$client = new WAClient(
    'your-app-key',    // Get this from your WASolution dashboard
    'your-auth-key'    // Get this from your WASolution dashboard
);

// Send a message
try {
    $response = $client->sendMessage(
        '60123456789',     // Recipient's phone number
        'Hello from PHP!'   // Your message
    );
    print_r($response);
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
```

### Response Format

A successful response will look like this:

```json
{
    "message_status": "Success",
    "data": {
        "from": "601987654321",
        "to": "60123456789",
        "status_code": 200
    }
}
```

## Error Handling

The package throws exceptions for various error cases:
- Invalid credentials
- Network errors
- API errors
- Invalid phone numbers

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request. Make sure to:

1. Follow the existing code style
2. Add tests for any new functionality
3. Update documentation as needed

## Security

If you discover any security related issues, please email suppport@wasolution.getligeeasy.com instead of using the issue tracker.

## Credits

- [WASolution](https://github.com/wasolution)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
