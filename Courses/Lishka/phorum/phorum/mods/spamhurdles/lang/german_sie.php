<?php
$PHORUM["DATA"]["LANG"]["mod_spamhurdles"] = array
(
    // Code CAPTCHA
    "CaptchaTitle" => "Spamschutz:",
    "CaptchaExplain" => "Geben Sie bitte den Code aus dem unten stehenden Bild in das Eingabefeld ein. Damit werden Spamprogramme, die versuchen, dieses Formular automatisch auszufllen, geblockt.",
    "CaptchaUnclearExplain" => "Wenn der Code schwer zu lesen ist, raten Sie einfach. Bei einem falschen Code wird ein neues Bild erzeugt und Sie erhalten eine zweite Chance.",
    "CaptchaSpoken" => "Diesen Code vorlesen lassen (auf Englisch).",
    "CaptchaFieldLabel" => "Code eingeben: ",
    "CaptchaWrongCode" => "Sie haben einen falschen Code fr die Spamschutz-Abfrage eingegeben. Bitte versuchen Sie es noch einmal.",

    // Mathematical CAPTCHA
    "MaptchaTitle" => "Spamschutz:",
    "MaptchaExplain" => "Bitte geben Sie die Lצsung der Rechenaufgabe in das Eingabefeld ein. Damit werden Spamprogramme, die versuchen, dieses Formular automatisch auszufllen, geblockt.",
    "MaptchaQuestion" => "{NUMBER1} plus {NUMBER2} = ?",
    "MaptchaSpoken" => "Die Frage vorlesen lassen (auf Englisch).",
    "MaptchaFieldLabel" => "Antwort: ",
    "MaptchaWrongAnswer" => "Die Antwort ist falsch. Bitte versuchen Sie es noch einmal.",

    // Javascript CAPTCHA.
    "JavascriptCaptchaNoscript" => "[Bitte schalten Sie Javascript in Ihren Browseroptionen ein, damit der Code sichtbar wird.]",

    // Generic message when a block was hit, but the user is still allowed
    // to post an automatically unapproved message.
    "PostingUnapproveError" => "Die Anti-Spam Software auf diesem Server hat Ihren Beitrag als Spam eingeordnet. Sie kצnnen die Nachricht trotzdem abschicken, aber sie wird erst publiziert, wenn ein Moderator sie freigibt. Sie kצnnen Ihren Beitrag nun noch einmal absenden.",

    // Generic message when blocking a message. We do not want to
    // feed specific blocking reasons to those who are blocked, because
    // that info might be used to bypass the blocking reasons.
    "BlockError" => "Die Anti-Spam Software auf diesem Server hat Ihren Beitrag als Spam eingeordnet. Darum wurde der Beitrag geblockt. Wenn der Beitrag kein Spam war, wenden Sie sich bitte an einen Administrator.<br/><br/><b>Hinweis</b>: Wenn JavaScript in Ihrem Browser ausgeschaltet ist, kצnnte dies der Grund fr das Blocken sein. Einige der verwendeten Anti-Spam-Manahmen verwenden JavaScript.",
);
?>
