function updateBusiness(&$business, $key, $newValue) {
    if (isset($business[$key])) {
        $business[$key] = $newValue;
        return "Business detail updated successfully!";
    }
    return "Key not found!";
}

$business = [
    "name" => "ABC Store",
    "location" => "New York",
    "phone" => "123-456-7890"
];

echo updateBusiness($business, "phone", "999-999-9999");
print_r($business);
