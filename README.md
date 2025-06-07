# CRYPTOGRAPHY-and-CRYPTANALYSIS-CSE447-BRACU


Cryptography and Cryptanalysis Lab
Course CoOrdinator  > Dr. Muhammad Iqbal Hossain


This repository contains the lab assignments for a course in Cryptography and Cryptanalysis. Each lab explores fundamental concepts and algorithms in the field, implemented in Python using Google Colab notebooks.

Labs Overview
This repository covers the following topics:

 Classical Encryption Techniques (Caesar and Substitution Ciphers)

 Message Authentication and Stream Ciphers (CBC-MAC and A5/1)

 Hashing Algorithms and Asymmetric Cryptography (Hashing and RSA)

 Key Exchange Protocols (Diffie-Hellman)

 Data Hiding Techniques (Image Steganography)

🏛️  Classical Encryption Techniques
This lab explores the basics of classical ciphers, including their implementation and cryptoanalysis.

Topics Covered:

Caesar Cipher: A simple substitution cipher where each letter is shifted by a fixed number of positions down the alphabet.

Substitution Cipher: A more general form of substitution where each letter is mapped to another unique letter.

Cryptoanalysis: Techniques for breaking these ciphers, such as brute-force for the Caesar cipher and frequency analysis for the substitution cipher.



🔐 Message Authentication and Stream Ciphers
This lab focuses on ensuring message integrity and confidentiality using MACs and a stream cipher used in GSM communications.

Topics Covered:

Message Authentication Code (MAC): A short piece of information used to authenticate a message.

Cipher Block Chaining - MAC (CBC-MAC): A method for constructing a MAC from a block cipher.

A5/1 Stream Cipher: A stream cipher used to provide over-the-air communication privacy in the GSM standard. It is based on three Linear Feedback Shift Registers (LFSRs).



🔑  Hashing and Asymmetric Cryptography
This lab covers one-way hash functions and the principles of public-key cryptography through the RSA algorithm.

Topics Covered:

Hashing: Creating a fixed-size output (hash) from a variable-sized input. This lab demonstrates a dictionary attack on hashed passwords.

RSA (Rivest–Shamir–Adleman): A public-key cryptosystem for secure data transmission.

Key Generation: The process of creating public and private keys from large prime numbers.

Small Exponential Attack: A vulnerability in RSA when a small public exponent e is used, allowing for easy recovery of the plaintext.



🤝 Diffie-Hellman Key Exchange
This lab demonstrates how two parties can establish a shared secret over an insecure channel.

Topics Covered:

Diffie-Hellman Algorithm: A method for securely exchanging cryptographic keys over a public channel.

Shared Secret: A key, known only to the two parties, that can be used for subsequent symmetric encryption.

Primitive Roots and Prime Moduli: The mathematical foundations of the Diffie-Hellman exchange.

(This lab focuses on the theory and a step-by-step procedural example.)

🖼️  Image Steganography
This lab explores the art of hiding secret messages within an image file without causing noticeable changes to the image.

Topics Covered:

Steganography: The practice of concealing a file, message, image, or video within another file, message, image, or video.

Least Significant Bit (LSB) Insertion: A common steganographic technique where the last bit of each byte in the image data is replaced with a bit from the secret message.

Encoding and Decoding: The processes of hiding the message in the image and extracting it afterward.



Feel free to explore the notebooks and code to learn more about each cryptographic concept.



# 🚀 CSE447 Lab project

This final project involves developing a secure web application that implements various cryptographic concepts learned throughout the course. The goal is to build a system that protects user data both at rest and in transit.

Develop/reuse existing system/app/webpage with the following features:

Core Requirements:

1. There will be 2 options: Login and Register. Users can login/Register to the system.
2. While registering, userinfo should be encrypted (while storing) and decrypted (while
viewing).
3. Password should be hashed and salted before storing in the database.
4. Separate function for credential check.
5. A key management module should be defined.
6. Users can post/view using encryption and decryption.
7. Every major piece of information in the database should be encrypted. I.e. if an
attacker has access to the database, unable to retrieve any data.
8. [OPTIONAL] Integrity check using MAC.


Ans: ⚡ <a href="https://github.com/AnonXarkA/CRYPTOGRAPHY-and-CRYPTANALYSIS-CSE447-BRACU/tree/main/Project">Project</a> <br>






