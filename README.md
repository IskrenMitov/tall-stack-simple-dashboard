# Laravel TALL Stack Dashboard

This project is a Laravel-based dashboard built using the TALL (Tailwind CSS, Alpine.js, Laravel, and Livewire) stack. It includes a reusable Livewire ImageGallery component for managing images associated with different models.

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Components](#components)
- [Testing](#testing)
- [Contributing](#contributing)
- [License](#license)

## Installation

1. Clone the repository:
   ```sh
   git clone https://github.com/IskrenMitov/tall-stack-simple-dashboard.git
   cd tall-stack-simple-dashboard

2. Install composer dependencies:
    ```sh
   composer install

3. Copy the .env.example file to .env and configure your environment settings.

4. Generate the application key:
    ```sh
   php artisan key:generate

5. Run migrations and seed the database with sample data using the following command:
    ```sh
   php artisan migrate --seed
   
6. Install the required frontend dependencies using the following command:
    ```sh
    npm install

7. Compile the frontend assets using the following command:
    ```sh
    npm run dev
   
8. Begin the development server by running the command:
    ```sh
    php artisan serve

**Note**: The project uses DigitalOcean for Database & File Storage.
*You can override the Database configuration with your own inside the .env file. 
If you want to use the testing DDBB and Storage configuration files, please request access from the author providing your IP address because Database configuration has Trusted Sources feature enabled.*


## Usage

1. Access the dashboard by visiting http://127.0.0.1:8000 in your web browser. *Note: the port 8000 may vary depending of if it's being already used or not.*
2. Navigate through the dashboard to manage images using the ImageGallery component.

## Components

### ImageGallery Component

The `ImageGallery` Livewire component is a versatile tool for managing images associated with various models. It offers the following features:

- Add images to the gallery *(through UploadImage component)*
- Delete images from the gallery
- Update image details such as name and alt text
- Mark images as favorites

To include the `ImageGallery` component in your views, use the following Blade directive:

```html
<livewire:image-gallery :instance="$modelInstance" />
```
Replace `$modelInstance` with an instance of the model you want to associate with the gallery.

### ImageGallery Component

The `UploadImage` Livewire component is a versatile tool for uploading images associated with various models. It offers the following features:

- Uploads Images to Storage
- Store Images info into Database
- Emits an event so the `ImageGallery` component can update the gallery

To include the `UploadImage` component in your views, use the following Blade example:

```html
<livewire:upload-image :imageable_type="\App\Models\Car::class" :imageable_id="$car->id"/>
```

## Testing

PHPUnit Tests haven't been added yet to the project. 

## Contributing

Contributions to the project are welcome! If you come across issues or have suggestions for improvements, feel free to open an issue or submit a pull request. Your contributions help make the project better for everyone.

## License

This project is open-source and available under the MIT License.
