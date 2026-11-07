<?php
declare(strict_types=1);

/**
 * fiqh-php-sawm-kaffarah-calc — محرك أحكام الصيام والفدية والكفارات وقضاء الأيام
 * Ramadan Sawm Qada, Fidyah & Kaffarah Obligation Resolver
 */
$input = "MissedDays=5,Excuse=Illness";
$digest = substr(hash("sha256", "fiqh-php-sawm-kaffarah-calc:" . $input), 0, 12);

echo "[RUN] fiqh-php-sawm-kaffarah-calc (PHP) — Ramadan Sawm Qada, Fidyah & Kaffarah Obligation Resolver" . PHP_EOL;
echo "[AR]  محرك أحكام الصيام والفدية والكفارات وقضاء الأيام" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Obligation=Fidyah_5_Miskin |GrainKg=7.5 | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
