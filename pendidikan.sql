-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2024 at 04:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hxnagnwx_psb_sdit_hidayah_klaten`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, 'e73a9bb8-96cb-4f5f-9f48-76e0316ddc38', 'database', 'default', '{\"uuid\":\"e73a9bb8-96cb-4f5f-9f48-76e0316ddc38\",\"displayName\":\"App\\\\Mail\\\\HasilSeleksiNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:33:\\\"App\\\\Mail\\\\HasilSeleksiNotification\\\":3:{s:5:\\\"casis\\\";O:8:\\\"stdClass\\\":20:{s:8:\\\"id_casis\\\";i:6;s:7:\\\"user_id\\\";i:1;s:4:\\\"nama\\\";s:3:\\\"ern\\\";s:5:\\\"email\\\";N;s:3:\\\"nik\\\";i:123;s:12:\\\"tempat_lahir\\\";s:6:\\\"Klaten\\\";s:13:\\\"tanggal_lahir\\\";s:10:\\\"2001-05-13\\\";s:6:\\\"alamat\\\";s:10:\\\"Jl. Murhum\\\";s:13:\\\"jenis_kelamin\\\";s:9:\\\"Perempuan\\\";s:11:\\\"jml_saudara\\\";i:2;s:9:\\\"nama_ortu\\\";s:5:\\\"Laode\\\";s:17:\\\"tempat_lahir_ortu\\\";s:10:\\\"Yogjakarta\\\";s:18:\\\"tanggal_lahir_ortu\\\";s:10:\\\"1988-02-08\\\";s:5:\\\"no_hp\\\";s:12:\\\"082388291011\\\";s:15:\\\"pendidikan_ortu\\\";s:2:\\\"S2\\\";s:14:\\\"pekerjaan_ortu\\\";s:4:\\\"Guru\\\";s:9:\\\"gaji_ortu\\\";i:400000;s:10:\\\"created_at\\\";s:19:\\\"2024-05-31 21:28:52\\\";s:10:\\\"updated_at\\\";s:8:\\\"14:28:52\\\";s:13:\\\"hasil_seleksi\\\";s:5:\\\"Lolos\\\";}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:19:\\\"kangern87@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Symfony\\Component\\Mailer\\Exception\\TransportException: Connection could not be established with host \"mailpit:1025\": stream_socket_client(): php_network_getaddresses: getaddrinfo for mailpit failed: No such host is known.  in D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\mailer\\Transport\\Smtp\\Stream\\SocketStream.php:154\nStack trace:\n#0 [internal function]: Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\SocketStream->Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\{closure}(2, \'stream_socket_c...\', \'D:\\\\Kuliah\\\\Tugas...\', 157)\n#1 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\mailer\\Transport\\Smtp\\Stream\\SocketStream.php(157): stream_socket_client(\'mailpit:1025\', 0, \'\', 60.0, 4, Resource id #786)\n#2 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(251): Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\SocketStream->initialize()\n#3 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(194): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->start()\n#4 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\mailer\\Transport\\AbstractTransport.php(69): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->doSend(Object(Symfony\\Component\\Mailer\\SentMessage))\n#5 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(136): Symfony\\Component\\Mailer\\Transport\\AbstractTransport->send(Object(Symfony\\Component\\Mailer\\SentMessage), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#6 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(523): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#7 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(287): Illuminate\\Mail\\Mailer->sendSymfonyMessage(Object(Symfony\\Component\\Mime\\Email))\n#8 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(204): Illuminate\\Mail\\Mailer->send(\'emails.hasil-se...\', Array, Object(Closure))\n#9 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#10 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(197): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#11 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\SendQueuedMailable.php(74): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\MailManager))\n#12 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle(Object(Illuminate\\Mail\\MailManager))\n#13 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#14 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#15 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#16 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(661): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#17 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#18 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#19 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#20 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#21 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Mail\\SendQueuedMailable), false)\n#22 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#23 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#24 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#25 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Mail\\SendQueuedMailable))\n#26 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#27 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()\n#28 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(375): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#29 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(173): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#30 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#31 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#32 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#33 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#34 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#35 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#36 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(661): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#37 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(183): Illuminate\\Container\\Container->call(Array)\n#38 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\console\\Command\\Command.php(291): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#39 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(152): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#40 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\console\\Application.php(1014): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#41 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\console\\Application.php(301): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#42 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#43 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(102): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(155): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 D:\\Kuliah\\Tugas Akhir\\PSB\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 {main}', '2024-07-02 03:21:46'),
(2, 'fd8aec1c-382a-4d08-a624-33eab64f5bd4', 'database', 'default', '{\"uuid\":\"fd8aec1c-382a-4d08-a624-33eab64f5bd4\",\"displayName\":\"App\\\\Mail\\\\HasilSeleksiNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:33:\\\"App\\\\Mail\\\\HasilSeleksiNotification\\\":3:{s:5:\\\"casis\\\";O:8:\\\"stdClass\\\":20:{s:8:\\\"id_casis\\\";i:6;s:7:\\\"user_id\\\";i:1;s:4:\\\"nama\\\";s:3:\\\"ern\\\";s:5:\\\"email\\\";N;s:3:\\\"nik\\\";i:123;s:12:\\\"tempat_lahir\\\";s:6:\\\"Klaten\\\";s:13:\\\"tanggal_lahir\\\";s:10:\\\"2001-05-13\\\";s:6:\\\"alamat\\\";s:10:\\\"Jl. Murhum\\\";s:13:\\\"jenis_kelamin\\\";s:9:\\\"Perempuan\\\";s:11:\\\"jml_saudara\\\";i:2;s:9:\\\"nama_ortu\\\";s:5:\\\"Laode\\\";s:17:\\\"tempat_lahir_ortu\\\";s:10:\\\"Yogjakarta\\\";s:18:\\\"tanggal_lahir_ortu\\\";s:10:\\\"1988-02-08\\\";s:5:\\\"no_hp\\\";s:12:\\\"082388291011\\\";s:15:\\\"pendidikan_ortu\\\";s:2:\\\"S2\\\";s:14:\\\"pekerjaan_ortu\\\";s:4:\\\"Guru\\\";s:9:\\\"gaji_ortu\\\";i:400000;s:10:\\\"created_at\\\";s:19:\\\"2024-05-31 21:28:52\\\";s:10:\\\"updated_at\\\";s:8:\\\"14:28:52\\\";s:13:\\\"hasil_seleksi\\\";s:5:\\\"Lolos\\\";}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:19:\\\"kangern87@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Symfony\\Component\\Mailer\\Exception\\TransportException: Connection could not be established with host \"mailpit:1025\": stream_socket_client(): php_network_getaddresses: getaddrinfo for mailpit failed: No such host is known.  in D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\mailer\\Transport\\Smtp\\Stream\\SocketStream.php:154\nStack trace:\n#0 [internal function]: Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\SocketStream->Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\{closure}(2, \'stream_socket_c...\', \'D:\\\\Kuliah\\\\Tugas...\', 157)\n#1 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\mailer\\Transport\\Smtp\\Stream\\SocketStream.php(157): stream_socket_client(\'mailpit:1025\', 0, \'\', 60.0, 4, Resource id #821)\n#2 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(251): Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\SocketStream->initialize()\n#3 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(194): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->start()\n#4 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\mailer\\Transport\\AbstractTransport.php(69): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->doSend(Object(Symfony\\Component\\Mailer\\SentMessage))\n#5 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(136): Symfony\\Component\\Mailer\\Transport\\AbstractTransport->send(Object(Symfony\\Component\\Mailer\\SentMessage), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#6 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(523): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#7 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(287): Illuminate\\Mail\\Mailer->sendSymfonyMessage(Object(Symfony\\Component\\Mime\\Email))\n#8 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(204): Illuminate\\Mail\\Mailer->send(\'emails.hasil-se...\', Array, Object(Closure))\n#9 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#10 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(197): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#11 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\SendQueuedMailable.php(74): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\MailManager))\n#12 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle(Object(Illuminate\\Mail\\MailManager))\n#13 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#14 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#15 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#16 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(661): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#17 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#18 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#19 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#20 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#21 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Mail\\SendQueuedMailable), false)\n#22 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#23 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#24 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#25 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Mail\\SendQueuedMailable))\n#26 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#27 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()\n#28 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(375): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#29 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(173): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#30 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#31 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#32 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#33 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#34 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#35 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#36 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(661): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#37 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(183): Illuminate\\Container\\Container->call(Array)\n#38 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\console\\Command\\Command.php(291): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#39 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(152): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#40 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\console\\Application.php(1014): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#41 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\console\\Application.php(301): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#42 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#43 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(102): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(155): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 D:\\Kuliah\\Tugas Akhir\\PSB\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 {main}', '2024-07-02 03:52:47'),
(3, 'a50a44eb-64c9-4f6d-9597-5259384d4505', 'database', 'default', '{\"uuid\":\"a50a44eb-64c9-4f6d-9597-5259384d4505\",\"displayName\":\"App\\\\Mail\\\\HasilSeleksiNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:33:\\\"App\\\\Mail\\\\HasilSeleksiNotification\\\":3:{s:5:\\\"casis\\\";O:8:\\\"stdClass\\\":20:{s:8:\\\"id_casis\\\";i:6;s:7:\\\"user_id\\\";i:1;s:4:\\\"nama\\\";s:3:\\\"ern\\\";s:5:\\\"email\\\";N;s:3:\\\"nik\\\";i:123;s:12:\\\"tempat_lahir\\\";s:6:\\\"Klaten\\\";s:13:\\\"tanggal_lahir\\\";s:10:\\\"2001-05-13\\\";s:6:\\\"alamat\\\";s:10:\\\"Jl. Murhum\\\";s:13:\\\"jenis_kelamin\\\";s:9:\\\"Perempuan\\\";s:11:\\\"jml_saudara\\\";i:2;s:9:\\\"nama_ortu\\\";s:5:\\\"Laode\\\";s:17:\\\"tempat_lahir_ortu\\\";s:10:\\\"Yogjakarta\\\";s:18:\\\"tanggal_lahir_ortu\\\";s:10:\\\"1988-02-08\\\";s:5:\\\"no_hp\\\";s:12:\\\"082388291011\\\";s:15:\\\"pendidikan_ortu\\\";s:2:\\\"S2\\\";s:14:\\\"pekerjaan_ortu\\\";s:4:\\\"Guru\\\";s:9:\\\"gaji_ortu\\\";i:400000;s:10:\\\"created_at\\\";s:19:\\\"2024-05-31 21:28:52\\\";s:10:\\\"updated_at\\\";s:8:\\\"14:28:52\\\";s:13:\\\"hasil_seleksi\\\";s:5:\\\"Lolos\\\";}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:19:\\\"kangern87@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:3:\\\"job\\\";N;}\"}}', 'Symfony\\Component\\Mailer\\Exception\\TransportException: Connection could not be established with host \"mailpit:1025\": stream_socket_client(): php_network_getaddresses: getaddrinfo for mailpit failed: No such host is known.  in D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\mailer\\Transport\\Smtp\\Stream\\SocketStream.php:154\nStack trace:\n#0 [internal function]: Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\SocketStream->Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\{closure}(2, \'stream_socket_c...\', \'D:\\\\Kuliah\\\\Tugas...\', 157)\n#1 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\mailer\\Transport\\Smtp\\Stream\\SocketStream.php(157): stream_socket_client(\'mailpit:1025\', 0, \'\', 60.0, 4, Resource id #824)\n#2 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(251): Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\SocketStream->initialize()\n#3 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(194): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->start()\n#4 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\mailer\\Transport\\AbstractTransport.php(69): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->doSend(Object(Symfony\\Component\\Mailer\\SentMessage))\n#5 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(136): Symfony\\Component\\Mailer\\Transport\\AbstractTransport->send(Object(Symfony\\Component\\Mailer\\SentMessage), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#6 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(523): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#7 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(287): Illuminate\\Mail\\Mailer->sendSymfonyMessage(Object(Symfony\\Component\\Mime\\Email))\n#8 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(204): Illuminate\\Mail\\Mailer->send(\'emails.hasil-se...\', Array, Object(Closure))\n#9 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#10 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(197): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#11 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\SendQueuedMailable.php(74): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\MailManager))\n#12 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle(Object(Illuminate\\Mail\\MailManager))\n#13 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#14 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#15 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#16 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(661): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#17 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#18 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#19 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#20 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#21 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Mail\\SendQueuedMailable), false)\n#22 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#23 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#24 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#25 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Mail\\SendQueuedMailable))\n#26 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#27 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()\n#28 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(375): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#29 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(173): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#30 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(147): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#31 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(130): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#32 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#33 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#34 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#35 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#36 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(661): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#37 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(183): Illuminate\\Container\\Container->call(Array)\n#38 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\console\\Command\\Command.php(291): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#39 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(152): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#40 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\console\\Application.php(1014): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#41 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\console\\Application.php(301): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#42 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#43 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(102): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 D:\\Kuliah\\Tugas Akhir\\PSB\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(155): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 D:\\Kuliah\\Tugas Akhir\\PSB\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 {main}', '2024-07-02 04:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(10) NOT NULL,
  `foto` varchar(225) DEFAULT NULL,
  `status` enum('Mulai','Berakhir') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(6, '1718271660.jpg', 'Berakhir', '2024-06-13 09:41:55', '09:41:55'),
(7, '1718271715.jpg', 'Mulai', '2024-06-13 02:41:55', '09:41:55');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_02_095433_add_email_to_tb_casis_table', 2),
(6, '2024_07_02_100313_create_jobs_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajar`
--

CREATE TABLE `tahun_ajar` (
  `id_ajar` int(10) NOT NULL,
  `tahun_ajar` varchar(50) DEFAULT NULL,
  `mulai_pendaftaran` date DEFAULT NULL,
  `batas_pendaftaran` date DEFAULT NULL,
  `tgl_seleksi` date DEFAULT NULL,
  `status` enum('Berlangsung','Berakhir','Belum Dimulai') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tahun_ajar`
--

INSERT INTO `tahun_ajar` (`id_ajar`, `tahun_ajar`, `mulai_pendaftaran`, `batas_pendaftaran`, `tgl_seleksi`, `status`, `created_at`, `updated_at`) VALUES
(1, '2024/2025', '2024-06-15', '2024-07-30', '2024-07-26', 'Berlangsung', '2024-07-18 18:14:29', '18:14:29'),
(2, '2025/2026', '2025-06-15', '2025-06-30', '2025-07-26', 'Belum Dimulai', '2024-07-17 23:47:33', '23:47:33'),
(3, '2026/2027', '2026-06-16', '2026-06-06', '2026-07-26', 'Belum Dimulai', '2024-07-17 23:47:44', '23:47:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_casis`
--

CREATE TABLE `tb_casis` (
  `id_casis` int(10) NOT NULL,
  `user_id` bigint(10) UNSIGNED DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nik` varchar(10) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `jml_saudara` int(10) DEFAULT NULL,
  `nama_ortu` varchar(50) DEFAULT NULL,
  `tempat_lahir_ortu` varchar(20) DEFAULT NULL,
  `tanggal_lahir_ortu` date DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `pendidikan_ortu` enum('Tidak Bersekolah','SD','SMP','SMA','S1','S2','S3') DEFAULT NULL,
  `pekerjaan_ortu` varchar(20) DEFAULT NULL,
  `gaji_ortu` int(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_casis`
--

INSERT INTO `tb_casis` (`id_casis`, `user_id`, `nama`, `email`, `nik`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `jml_saudara`, `nama_ortu`, `tempat_lahir_ortu`, `tanggal_lahir_ortu`, `no_hp`, `pendidikan_ortu`, `pekerjaan_ortu`, `gaji_ortu`, `created_at`, `updated_at`) VALUES
(24, 38, 'Rizal Wahyudi', NULL, '1234567899', 'Klaten', '2008-07-17', 'Jl. Murhum', 'Laki-Laki', 2, 'yongssss', 'Yogjakarta', '1991-07-17', '082388291019', 'S1', 'Dosen', 300000, '2024-07-17 09:55:13', '16:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_panitia`
--

CREATE TABLE `tb_panitia` (
  `id_panitia` int(10) NOT NULL,
  `user_id` bigint(10) UNSIGNED DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `status` enum('Aktif','Non Aktif') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_panitia`
--

INSERT INTO `tb_panitia` (`id_panitia`, `user_id`, `nama`, `jenis_kelamin`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Panitia Seleksi', 'Perempuan', 'Aktif', '2024-07-02 11:19:19', '14:56:19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(10) NOT NULL,
  `casis_id` int(10) DEFAULT NULL,
  `tgl_pembayaran` date DEFAULT NULL,
  `jumlah_pembayaran` int(10) DEFAULT NULL,
  `status_pembayaran` enum('Lunas','Belum Lunas') DEFAULT NULL,
  `bukti_pembayaran` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `casis_id`, `tgl_pembayaran`, `jumlah_pembayaran`, `status_pembayaran`, `bukti_pembayaran`, `created_at`, `updated_at`) VALUES
(22, 24, '2024-07-17', 100000, 'Lunas', '1721235394_bukti_bayar_brimo.jpg', '2024-07-17 16:58:30', '16:58:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` int(10) NOT NULL,
  `casis_id` int(10) DEFAULT NULL,
  `ajar_id` int(10) DEFAULT NULL,
  `tgl_pendaftaran` date DEFAULT NULL,
  `status` enum('Berhasil','Pending','Gagal') DEFAULT NULL,
  `akte` varchar(225) DEFAULT NULL,
  `kk` varchar(225) DEFAULT NULL,
  `foto` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `casis_id`, `ajar_id`, `tgl_pendaftaran`, `status`, `akte`, `kk`, `foto`, `created_at`, `updated_at`) VALUES
(30, 24, 1, '2024-07-17', 'Berhasil', '1721235313_1721018529_1719919609_akte.jpg', '1721235313_1721018529_1719919609_kk.jpeg', '1721235313_1721018529_1719919609_foto.jpeg', '2024-07-17 17:00:01', '17:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_seleksi`
--

CREATE TABLE `tb_seleksi` (
  `id_seleksi` int(10) NOT NULL,
  `pendaftaran_id` int(10) DEFAULT NULL,
  `casis_id` int(10) DEFAULT NULL,
  `tgl_seleksi` date DEFAULT NULL,
  `nilai_baca` int(10) DEFAULT NULL,
  `nilai_tulis` int(10) DEFAULT NULL,
  `nilai_hitung` int(10) DEFAULT NULL,
  `nilai_ngaji` int(10) DEFAULT NULL,
  `nilai_wawancara` int(10) DEFAULT NULL,
  `total_nilai` int(10) DEFAULT NULL,
  `nilai_akhir` int(10) DEFAULT NULL,
  `hasil_seleksi` enum('Lolos','Tidak Lolos') DEFAULT NULL,
  `status` enum('Berhasil','Pending') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_seleksi`
--

INSERT INTO `tb_seleksi` (`id_seleksi`, `pendaftaran_id`, `casis_id`, `tgl_seleksi`, `nilai_baca`, `nilai_tulis`, `nilai_hitung`, `nilai_ngaji`, `nilai_wawancara`, `total_nilai`, `nilai_akhir`, `hasil_seleksi`, `status`, `created_at`, `updated_at`) VALUES
(9, 30, 24, '2024-07-18', 70, 87, 70, 77, 70, 374, 75, 'Lolos', 'Berhasil', '2024-07-21 13:46:38', '13:46:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Calon Siswa','Admin','Kepala Sekolah','Panitia') DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$rhFYwOifVx7VZ6ahYtuD8Ot4dS5tg83O8fOkCKj.owGbK7noleIqe', 'Admin', NULL, '2024-05-18 06:09:20', '2024-05-18 06:09:22'),
(2, 'Panitia', 'panitia@gmail.com', NULL, '$2y$10$ar.aROzkV0hivUEec5pU7entNV8SbEPvL.KD2Dk20Y/UA8M.0yq7.', 'Panitia', NULL, '2024-05-25 07:56:19', '2024-05-25 07:56:19'),
(38, 'Rizal', 'rizal@gmail.com', NULL, '$2y$10$iQHaA/Na3AZFYErccA/saelEDUD2yH0p60u/Yfap/qSUqneXyPQE.', 'Calon Siswa', NULL, '2024-07-17 09:34:03', '2024-07-17 09:34:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tahun_ajar`
--
ALTER TABLE `tahun_ajar`
  ADD PRIMARY KEY (`id_ajar`);

--
-- Indexes for table `tb_casis`
--
ALTER TABLE `tb_casis`
  ADD PRIMARY KEY (`id_casis`),
  ADD KEY `id_user` (`user_id`);

--
-- Indexes for table `tb_panitia`
--
ALTER TABLE `tb_panitia`
  ADD PRIMARY KEY (`id_panitia`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_casis` (`casis_id`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_casis` (`casis_id`),
  ADD KEY `tb_pendaftaran_ibfk_2` (`ajar_id`);

--
-- Indexes for table `tb_seleksi`
--
ALTER TABLE `tb_seleksi`
  ADD PRIMARY KEY (`id_seleksi`),
  ADD KEY `id_pendaftaran` (`pendaftaran_id`),
  ADD KEY `id_casis` (`casis_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahun_ajar`
--
ALTER TABLE `tahun_ajar`
  MODIFY `id_ajar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_casis`
--
ALTER TABLE `tb_casis`
  MODIFY `id_casis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_panitia`
--
ALTER TABLE `tb_panitia`
  MODIFY `id_panitia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_pendaftaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_seleksi`
--
ALTER TABLE `tb_seleksi`
  MODIFY `id_seleksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_casis`
--
ALTER TABLE `tb_casis`
  ADD CONSTRAINT `tb_casis_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_panitia`
--
ALTER TABLE `tb_panitia`
  ADD CONSTRAINT `tb_panitia_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`casis_id`) REFERENCES `tb_casis` (`id_casis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD CONSTRAINT `tb_pendaftaran_ibfk_1` FOREIGN KEY (`casis_id`) REFERENCES `tb_casis` (`id_casis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pendaftaran_ibfk_2` FOREIGN KEY (`ajar_id`) REFERENCES `tahun_ajar` (`id_ajar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_seleksi`
--
ALTER TABLE `tb_seleksi`
  ADD CONSTRAINT `tb_seleksi_ibfk_1` FOREIGN KEY (`pendaftaran_id`) REFERENCES `tb_pendaftaran` (`id_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_seleksi_ibfk_2` FOREIGN KEY (`casis_id`) REFERENCES `tb_casis` (`id_casis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
