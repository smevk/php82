<?php

// Math functions

// abs — Absolute value
echo abs(-5); // Output: 5

// acos — Arc cosine
echo acos(0.5); // Output: 1.0471975511966

// acosh — Inverse hyperbolic cosine
echo acosh(1.5); // Output: 0.96242365011921

// asin — Arc sine
echo asin(0.5); // Output: 0.5235987755983

// asinh — Inverse hyperbolic sine
echo asinh(2); // Output: 1.4436354751788

// atan2 — Arc tangent of two variables
echo atan2(1, 2); // Output: 0.46364760900081

// atan — Arc tangent
echo atan(1); // Output: 0.78539816339745

// atanh — Inverse hyperbolic tangent
echo atanh(0.5); // Output: 0.54930614433405

// base_convert — Convert a number between arbitrary bases
echo base_convert('1010', 2, 10); // Output: 10

// bindec — Binary to decimal
echo bindec('1010'); // Output: 10

// ceil — Round fractions up
echo ceil(4.3); // Output: 5

// cos — Cosine
echo cos(1); // Output: 0.54030230586814

// cosh — Hyperbolic cosine
echo cosh(1); // Output: 1.5430806348152

// decbin — Decimal to binary
echo decbin(10); // Output: 1010

// dechex — Decimal to hexadecimal
echo dechex(10); // Output: a

// decoct — Decimal to octal
echo decoct(10); // Output: 12

// deg2rad — Converts the number in degrees to the radian equivalent
echo deg2rad(180); // Output: 3.1415926535898

// exp — Calculates the exponent of e
echo exp(1); // Output: 2.718281828459

// expm1 — Returns exp(number) - 1, computed in a way that is accurate even when the value of number is close to zero
echo expm1(1); // Output: 1.718281828459

// fdiv — Divides two numbers, according to IEEE 754
echo fdiv(10, 3); // Output: 3.3333333333333

// floor — Round fractions down
echo floor(4.7); // Output: 4

// fmod — Returns the floating point remainder (modulo) of the division of the arguments
echo fmod(7, 2); // Output: 1

// hexdec — Hexadecimal to decimal
echo hexdec('a'); // Output: 10

// hypot — Calculate the length of the hypotenuse of a right-angle triangle
echo hypot(3, 4); // Output: 5

// intdiv — Integer division
echo intdiv(10, 3); // Output: 3

// is_finite — Finds whether a value is a legal finite number
echo is_finite(1.2); // Output: 1

// is_infinite — Finds whether a value is infinite
echo is_infinite(INF); // Output: 1

// is_nan — Finds whether a value is not a number
echo is_nan(sqrt(-1)); // Output: 1

// log10 — Base-10 logarithm
echo log10(100); // Output: 2

// log1p — Returns log(1 + number), computed in a way that is accurate even when the value of number is close to zero
echo log1p(0.5); // Output: 0.40546510810816

// log — Natural logarithm
echo log(10); // Output: 2.302585092994

// max — Find highest value
echo max(2, 5, 8); // Output: 8

// min — Find lowest value
echo min(2, 5, 8); // Output: 2

// octdec — Octal to decimal
echo octdec('12'); // Output: 10

// pi — Get value of pi
echo pi(); // Output: 3.1415926535898

// pow — Exponential expression
echo pow(2, 3); // Output: 8

// rad2deg — Converts the radian number to the equivalent number in degrees
echo rad2deg(1.5707963267949); // Output: 90

// round — Rounds a float
echo round(3.6); // Output: 4

// sin — Sine
echo sin(1); // Output: 0.8414709848079

// sinh — Hyperbolic sine
echo sinh(1); // Output: 1.1752011936438

// sqrt — Square root
echo sqrt(16); // Output: 4

// tan — Tangent
echo tan(1); // Output: 1.5574077246549

// tanh — Hyperbolic tangent
echo tanh(1); // Output: 0.76159415595576

?>