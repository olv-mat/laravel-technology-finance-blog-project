<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tech & Finanças - Cadastro</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 text-gray-900 font-serif">
        <div class="flex items-center justify-center min-h-screen bg-gray-100">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
                <h2 class="text-2xl font-bold text-center text-black mb-6">Tech & Finanças</h2>
                <form action="#" method="post" class="space-y-4">
                    <div>
                        <label for="register-user" class="block text-sm font-semibold text-gray-700">Usuário</label>
                        <input type="text" id="register-user" name="user" class="w-full px-4 py-2 border border-gray-300 rounded-md" required placeholder="Crie seu nome de usuário">
                    </div>
                    <div>
                        <label for="register-email" class="block text-sm font-semibold text-gray-700">E-mail (Opcional)</label>
                        <input type="email" id="register-email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md" placeholder="Digite seu e-mail">
                    </div>
                    <div>
                        <label for="register-password" class="block text-sm font-semibold text-gray-700">Senha</label>
                        <input type="password" id="register-password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md" required placeholder="Digite sua senha">
                    </div>
                    <div>
                        <label for="register-confirm-password" class="block text-sm font-semibold text-gray-700">Confirmar Senha</label>
                        <input type="password" id="register-confirm-password" name="confirm_password" class="w-full px-4 py-2 border border-gray-300 rounded-md" required placeholder="Confirme sua senha">
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-black text-white py-2 rounded-md font-semibold">Cadastrar</button>
                    </div>
                </form>
                <div class="mt-4 text-center">
                    <p class="text-sm text-gray-700">Já tem uma conta? <a href="{{ route('login.index') }}" class="text-blue-700 font-semibold hover:underline">Faça login</a></p>
                </div>
            </div>
        </div>
    </body>
</html>