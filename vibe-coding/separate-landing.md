Create me a separate index.php and support styles (css, js file ) for our landing page so that I can deploy in hostinger like 

public_html/
├── index.php                        → Landing page
├── main/
│   ├── prod/                        → Laravel (production)
│   ├── beta/                        → Laravel (staging)
│   └── test/                        → Laravel (testing)
├── 1donotdeletereplacefolder_subdomainshere

where 
├── main/
│   ├── prod/                        → Laravel (production)
│   ├── beta/                        → Laravel (staging)
│   └── test/                        → Laravel (testing)

place where this laravel app goes but its landing page as to be at level of 
public_html/
├── index.php                        → Landing page

and this will be kept seprate outside the laravel app. in the menu URL we will give the sub directory

SO create me the landing page separate. for now keep this inside public/