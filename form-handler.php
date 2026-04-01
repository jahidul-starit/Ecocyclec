<?php
/**
 * EzygoBD — Central Form Handler
 * Receives POST data from all site forms, builds an email, and sends via mail().
 * Redirects back to the referring page with ?status=success or ?status=error.
 */

// ── Only accept POST ──
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// ── Recipient email ──
$to = 'info@ezygobd.com';

// ── Sanitise helper ──
function clean(string $val): string {
    return htmlspecialchars(strip_tags(trim($val)), ENT_QUOTES, 'UTF-8');
}

// ── Read form type ──
$formType = isset($_POST['form_type']) ? clean($_POST['form_type']) : '';

// ── Build email subject & body per form type ──
switch ($formType) {

    case 'contact':
        $name    = clean($_POST['name']    ?? '');
        $email   = clean($_POST['email']   ?? '');
        $message = clean($_POST['message'] ?? '');
        $subject = "New Contact Message from $name";
        $body    = "Name:    $name\nEmail:   $email\n\nMessage:\n$message";
        break;

    case 'driver':
        $name  = clean($_POST['name']  ?? '');
        $phone = clean($_POST['phone'] ?? '');
        $city  = clean($_POST['city']  ?? '');
        $subject = "New Driver Registration — $name";
        $body    = "Name:  $name\nPhone: $phone\nCity:  $city";
        break;

    case 'enterprise':
        $name    = clean($_POST['name']    ?? '');
        $company = clean($_POST['company'] ?? '');
        $email   = clean($_POST['email']   ?? '');
        $fleet   = clean($_POST['fleet']   ?? '');
        $subject = "Enterprise Inquiry from $company";
        $body    = "Name:     $name\nCompany:  $company\nEmail:    $email\nFleet Size: $fleet";
        break;

    case 'franchise':
        $name    = clean($_POST['name']    ?? '');
        $phone   = clean($_POST['phone']   ?? '');
        $email   = clean($_POST['email']   ?? '');
        $city    = clean($_POST['city']    ?? '');
        $model   = clean($_POST['model']   ?? '');
        $message = clean($_POST['message'] ?? '');
        $subject = "Franchise Application — $name ($model)";
        $body    = "Name:    $name\nPhone:   $phone\nEmail:   $email\nCity:    $city\nModel:   $model\n\nMessage:\n$message";
        break;

    case 'advertising':
        $name    = clean($_POST['name']    ?? '');
        $phone   = clean($_POST['phone']   ?? '');
        $email   = clean($_POST['email']   ?? '');
        $brand   = clean($_POST['brand']   ?? '');
        $format  = clean($_POST['format']  ?? '');
        $budget  = clean($_POST['budget']  ?? '');
        $message = clean($_POST['message'] ?? '');
        $subject = "Advertising Enquiry from $brand";
        $body    = "Name:    $name\nPhone:   $phone\nEmail:   $email\nBrand:   $brand\nFormat:  $format\nBudget:  $budget\n\nCampaign Goal:\n$message";
        break;

    case 'evs_contact':
        $name    = clean($_POST['name']    ?? '');
        $email   = clean($_POST['email']   ?? '');
        $message = clean($_POST['message'] ?? '');
        $subject = "EV Page Contact from $name";
        $body    = "Name:    $name\nEmail:   $email\n\nMessage:\n$message";
        break;

    case 'support':
        $name       = clean($_POST['name']       ?? '');
        $phone      = clean($_POST['phone']      ?? '');
        $issueType  = clean($_POST['issue_type'] ?? '');
        $message    = clean($_POST['message']    ?? '');
        $subject    = "Rider Support Request — $issueType ($name)";
        $body       = "Name:       $name\nPhone:      $phone\nIssue Type: $issueType\n\nDescription:\n$message";
        break;

    case 'rent_ev':
        $name        = clean($_POST['name']         ?? '');
        $phone       = clean($_POST['phone']        ?? '');
        $email       = clean($_POST['email']        ?? '');
        $nid         = clean($_POST['nid']          ?? '');
        $gender      = clean($_POST['gender']       ?? '');
        $address     = clean($_POST['address']      ?? '');
        $vehicleType = clean($_POST['vehicle_type'] ?? 'Any');
        $rentalPlan  = clean($_POST['rental_plan']  ?? 'Not specified');
        $subject = "EV Rental Request — $name ($vehicleType)";
        $body    = "Name:         $name\nPhone:        $phone\nEmail:        $email\nNID:          $nid\nGender:       $gender\nAddress:      $address\nVehicle Type: $vehicleType\nRental Plan:  $rentalPlan";
        break;

    case 'partnership':
        $name            = clean($_POST['name']             ?? '');
        $company         = clean($_POST['company']          ?? '');
        $email           = clean($_POST['email']            ?? '');
        $partnershipType = clean($_POST['partnership_type'] ?? '');
        $message         = clean($_POST['message']          ?? '');
        $subject         = "Partnership Enquiry — $partnershipType ($company)";
        $body            = "Name:              $name\nCompany:           $company\nEmail:             $email\nPartnership Type:  $partnershipType\n\nMessage:\n$message";
        break;

    default:
        // Unknown form type — redirect back
        $referer = $_SERVER['HTTP_REFERER'] ?? 'index.php';
        header('Location: ' . $referer . '?status=error');
        exit;
}

// ── Email headers ──
$senderEmail = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL)
    ? $_POST['email']
    : 'noreply@ezygobd.com';

$headers  = "From: EzygoBD Website <noreply@ezygobd.com>\r\n";
$headers .= "Reply-To: $senderEmail\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// ── Send ──
$sent = mail($to, $subject, $body, $headers);

// ── Redirect back ──
$referer = $_SERVER['HTTP_REFERER'] ?? 'index.php';
$sep     = (strpos($referer, '?') !== false) ? '&' : '?';
$status  = $sent ? 'success' : 'error';

header("Location: {$referer}{$sep}status={$status}");
exit;
