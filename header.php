
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>S3 tutorial</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
		<link href="css/smoothness/jquery-ui-1.9.2.custom.css" rel="stylesheet">	
		<meta name="viewport" content="width=device-width,initial-scale=1">
    </head>

<body>
	<header>
        <nav>
            <a href="#">Home</a><a href="#">About</a> <a href="#">Contact</a>

            <div>
                <a href="#">Twitter</a> <a href="#">Facebook</a> <a href="#">Google plus</a>
            </div>
        </nav>

        <h1>Hello<span>World</span></h1><span>a simple responsive template</span>
    </header>
	<section id="tabs">
        <article data-title="Custom Title">
            <h2>Title 1</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="#" onclick="myTabs.next(); return false">Finished ? Go to the next tab</a>
        </article>

        <article>
            <h2>Title 2</h2>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#" onclick="myTabs.next(); return false">Come back to first tab</a>
        </article>

        <article>
            <h2>Title 3</h2>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#" onclick="myTabs.next(); return false">Come back to first tab</a>
        </article>

        <article>
            <h2>Title 4</h2>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#" onclick="myTabs.next(); return false">Finished ? Go to the next tab</a>
        </article>

        <article>
            <p>Number as name</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <a href="#" onclick="myTabs.next(); return false">Come back to first tab</a>
        </article>
    </section>