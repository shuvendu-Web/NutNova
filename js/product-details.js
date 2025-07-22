function addToCartDynamic(product) {
  const quantity = parseInt(document.getElementById('quantity').value, 10);
  product.quantity = quantity;

  let cart = JSON.parse(localStorage.getItem('cart')) || [];
  const existing = cart.find(p => p.id === product.id);
  if (existing) {
    existing.quantity += quantity;
  } else {
    cart.push(product);
  }
  localStorage.setItem('cart', JSON.stringify(cart));
  window.location.href = 'cart.php';
}

function renderCart() {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  const container = document.getElementById('cart-items');
  const totalContainer = document.getElementById('cart-total');
  container.innerHTML = '';
  totalContainer.innerHTML = '';

  if (cart.length === 0) {
    container.innerHTML = '<td colspan="5" ><h3 class="py-5"> Your cart is empty. 🛒<h3></td>';
    return;
  }

  let total = 0;
  cart.forEach((item, index) => {
    const itemTotal = item.price * item.quantity;
    total += itemTotal;

    const div = document.createElement('tr');
    div.className = '';
    div.innerHTML = `<td class="product-thumbnail"><img src="${item.image}" alt="${item.name}" width="80px" height="80px" />
                                    </td>
                                    <td class="product-name"><a href="#">${item.name}</a></td>
                             
                                  
                                       <td class="product-price"><span class="amount">$${itemTotal.toFixed(2)}</span></td>
                                         <td class="product-quantity">
                                        <p>Qty: ${item.quantity}</p>
                                    </td>
                                    <td class="product-remove h2">  <button onclick="removeFromCart(${index})">
                                    <i class="zmdi zmdi-delete"></i></button></td> `;
    container.appendChild(div);
  });

  totalContainer.innerHTML = `<h2>Cart Total: <strong class="primary_color" >$${total.toFixed(2)}</strong></h2>`;
}

function removeFromCart(index) {
  let cart = JSON.parse(localStorage.getItem('cart')) || [];
  cart.splice(index, 1);
  localStorage.setItem('cart', JSON.stringify(cart));
  renderCart();
}

if (document.getElementById('cart-items')) {
  renderCart();
}
