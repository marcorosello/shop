# Shop
Event sourced draft of a web shop

## Basic model

Product, Ean, Customer, Basket

## Basic events

eanAddedToBasket, eanRemovedFromBasket, customerAddedInformation, orderCreated, orderPaid,
orderPackaged, orderSent, oderDelivered, orderReturned, orderPartiallyReturned


## Development considerations

Only one event queue. Append only, not allowed to delete or update, only append.
Command bus, only commands can persist data.
Order is a "aggregated", so it has state, it will only store the latest status, but everything can be seen.
The model or entity will only read data but all the inserts need to be done through commands
From the order you should be able to know everything that has happened to it. Example, order created, order paid,
order packaged, order sent, order received, order returned.
