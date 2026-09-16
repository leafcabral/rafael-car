<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body>
	<main class="vh-100 d-flex align-items-center justify-content-center">
		<article class="card shadow-lg border-0 p-3" style="width: 24rem;">
			<div class="card-body">
				<h1 class="card-title fw-bolder mb-4 text-center">Acessar Conta</h1>

				<div class="d-flex flex-column gap-2">
					<div class="input-group">
						<input type="email" placeholder="Seu e-mail" class="form-control" require>
					</div>
					<div class="input-group">
						<input type="password" placeholder="Sua senha" class="form-control" id="passwordInput" require>
						<button type="button" class="btn btn-outline-secondary" onclick="showPassword()">
							<i class="bi bi-eye" id="passwordIcon"></i>
						</button>
					</div>
					<button class="btn btn-success">Entrar</button>
					<button class="btn btn-link">Esqueceu a senha?</button>
				</div>
			</div>
		</article>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
	<script>
		const passwordInput = document.getElementById("passwordInput")
		const passwordIcon = document.getElementById("passwordIcon")

		const showPassword = () => {
			const currentType = passwordInput.getAttribute("type")
			passwordInput.setAttribute("type",
				currentType === "password"
					? "text" : "password"
			)
			console.log(currentType)
			passwordIcon.classList.toggle('bi-eye');
			passwordIcon.classList.toggle('bi-eye-slash');
		}
	</script>
</body>
</html>
