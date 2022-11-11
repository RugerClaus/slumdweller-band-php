let stripe = Stripe('pk_test_51LwYi8E5R0JrGrGVQhQBVklbWStwXafufbTMKa135Aa8vFgwTXE9wIE5lxvKAtwDz4Z5MAbfbKwkFj6oU9j1bvsD00LMb7a5fB')
const clientSecret = 'CLIENT_SECRET'

const elements = stripe.elements('../payment.php')
elements.create('payment')