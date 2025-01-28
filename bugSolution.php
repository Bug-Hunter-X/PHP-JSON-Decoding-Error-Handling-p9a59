```php
$file = 'data.txt';
if (!file_exists($file)) {
    echo "Error: File not found: $file\n";
    exit;
}
$data = file_get_contents($file);
if ($data === false) {
    echo "Error reading file: $file\n";
    exit;
}
$decoded = json_decode($data);
if ($decoded === null && json_last_error() !== JSON_ERROR_NONE) {
    echo 'Error decoding JSON: ' . json_last_error_msg() . '\n';
    exit;
}
//Further processing of $decoded
print_r($decoded);
```