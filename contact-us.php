<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

$contact_success = false;
$contact_errors = [];
$contact_form = array_fill_keys(['name', 'email', 'phone', 'subject', 'message'], '');
$success_message = '';

$composer_autoload = __DIR__ . '/vendor/autoload.php';
$config_path = __DIR__ . '/includes/mail-config.php';
$mailer_config = file_exists($config_path) ? include $config_path : [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contact_form['name'] = trim($_POST['name'] ?? '');
    $contact_form['email'] = trim($_POST['email'] ?? '');
    $contact_form['phone'] = trim($_POST['phone'] ?? '');
    $contact_form['subject'] = trim($_POST['subject'] ?? '');
    $contact_form['message'] = trim($_POST['message'] ?? '');

    if ($contact_form['name'] === '') {
        $contact_errors[] = 'Please provide your name.';
    }
    if ($contact_form['email'] === '' || !filter_var($contact_form['email'], FILTER_VALIDATE_EMAIL)) {
        $contact_errors[] = 'Please provide a valid email address.';
    }
    if ($contact_form['phone'] === '') {
        $contact_errors[] = 'Please provide a phone number.';
    }
    if ($contact_form['subject'] === '') {
        $contact_errors[] = 'Please provide a subject.';
    }
    if ($contact_form['message'] === '') {
        $contact_errors[] = 'Please provide a message.';
    }

    if (empty($contact_errors)) {
        $smtp_ready = file_exists($composer_autoload) && !empty($mailer_config['smtp'] ?? []);

        if (!$smtp_ready) {
            $contact_errors[] = 'Email is temporarily unavailable; please update the mailer configuration.';
        } else {
            require_once $composer_autoload;

            $mail = new PHPMailer(true);
            try {
                $smtp = $mailer_config['smtp'];
                $mail->isSMTP();
                $mail->Host = $smtp['host'];
                $mail->SMTPAuth = $smtp['auth'] ?? true;
                $mail->Username = $smtp['username'] ?? '';
                $mail->Password = $smtp['password'] ?? '';
                $mail->SMTPSecure = $smtp['secure'] ?? PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = $smtp['port'] ?? 587;

                $mail->setFrom(
                    $mailer_config['from_email'] ?? 'no-reply@vizonegroup.com',
                    $mailer_config['from_name'] ?? 'Vizone Group Website'
                );
                $mail->addAddress($mailer_config['recipient'] ?? 'info@vizonegroup.com');
                $mail->addReplyTo($contact_form['email'], $contact_form['name']);

                $mail->Subject = 'Vizone Group Contact Request: ' . ($contact_form['subject'] ?: 'No subject');
                $mail->Body = sprintf(
                    "Name: %s\nEmail: %s\nPhone: %s\nSubject: %s\n\nMessage:\n%s",
                    $contact_form['name'],
                    $contact_form['email'],
                    $contact_form['phone'],
                    $contact_form['subject'],
                    $contact_form['message']
                );
                $mail->CharSet = 'UTF-8';

                if ($mail->send()) {
                    $contact_success = true;
                    $success_message = 'Thank you for getting in touch. We will contact you soon.';
                    $contact_form = array_fill_keys(array_keys($contact_form), '');
                } else {
                    $contact_errors[] = 'We were unable to send your message. Please try again later.';
                }
            } catch (Exception $e) {
                $contact_errors[] = 'Mailer error: ' . $e->getMessage();
            }
        }
    }
}
?>
<?php include __DIR__ . '/includes/header.php'; ?>
<div class="page-banner ovbl-dark parallax" style="background-image:url(assets/images/contact-us.webp);">
    <div class="container">
        <div class="page-banner-entry">
            <h1 class="text-white">Contact Us</h1>
            <div class="breadcrumb-row">
                <ul class="list-inline">
                    <li class="arrow"><a href="/"><i class="fa fa-home"></i> Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
    .contact-btn {
        background: #550808;
        border-radius: 0;
        color: #fff;
        padding: 10px 20px;
    }

    .contact-btn:hover {
        color: #fff;
    }

    .form-control:focus {
        box-shadow: unset;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-area-box .input-group .form-control {
        border-radius: 0 !important;
    }

    .input-group {
        display: block;
    }

    @media (max-width:850px) {
        .contact-bx-area2 {
            margin: 0;
        }
    }
</style>
<div class="section-area bg-gray p-t60 p-b90">
    <div class="container">
        <div class="row contact-bx-area2">
            <div class="col-lg-8 col-md-12 wow fadeIn p-t70 p-b60" data-wow-delay="0.4s">
                <form class="form-area-box ajax-form p-lr30 p-sm-lr5" id="contact-form" method="POST">
                    <div class="heading-bx">
                        <h2 class="title-head m-b0">Contact Us</h2>
                    </div>
                    <div id="success-msg" class="msg">
                        <?php if ($contact_success): ?>
                            <p class="text-success"><?php echo htmlspecialchars($success_message); ?></p>
                        <?php elseif (!empty($contact_errors)): ?>
                            <ul class="text-danger">
                                <?php foreach ($contact_errors as $error): ?>
                                    <li><?php echo htmlspecialchars($error); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                    <div class="row placeani">
                        <div class="col-lg-6 ">
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="name-error">Name*</label>
                                    <input name="name" type="text" id="name" class="form-control" value="<?php echo htmlspecialchars($contact_form['name']); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="email-error">Email Address*</label>
                                    <input name="email" type="email" id="email" value="<?php echo htmlspecialchars($contact_form['email']); ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="phone-error">Phone*</label>
                                    <input name="phone" type="text" id="phone" value="<?php echo htmlspecialchars($contact_form['phone']); ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <label class="subject-error">Subject*</label>
                                    <input name="subject" type="text" id="subject" value="<?php echo htmlspecialchars($contact_form['subject']); ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label>Type Message</label>
                                    <textarea name="message" id="message" rows="4" class="form-control"><?php echo htmlspecialchars($contact_form['message']); ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="contact-btn">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-md-12 wow fadeIn right-info p-sm-lr15" data-wow-delay="0.4s">
                <div class="contact-icon-box">
                    <h5 class="title"><i class="icon la la-map-marker-alt"></i>Head Office</h5>
                    <p>B-G-4, KM GROUP, LEELA EFCEE, Waghawadi Rd., Vidhyanagar, Bhavnagar, Gujarat 364002</p>
                    <i class="la la-map-marker-alt bg-icon"></i>
                </div>
                <div class="contact-icon-box">
                    <h5 class="title"><i class="icon la la-phone-volume"></i>Contact Number</h5>
                    <p><a href="tel:9825206647">+91 98252 06647</a></p>
                    <p><a href="tel:99783 55571">+91 99783 55571</a></p>
                    <i class="la la-phone-volume bg-icon"></i>
                </div>
                <div class="contact-icon-box">
                    <h5 class="title"><i class="icon la la-envelope-open"></i>Email Address</h5>
                    <a href="mailto:info@kmgroup.co.in">info@kmgroup.co.in</a>
                    <a href="mailto:kalimasteel@gmail.com">kalimasteel@gmail.com</a>
                    <i class="la la-envelope-open bg-icon"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contct_map_area">
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.05942510311!2d71.66265817476159!3d22.726032527330393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395941a9c06ea517%3A0x95f8a97bf346ad0c!2sVIZONE%20STEEL!5e0!3m2!1sen!2sin!4v1767677299015!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
