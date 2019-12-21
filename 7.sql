SELECT order_placed_date, id, customer_id, SUM(jml_order) AS jml_order 
FROM `customer` 
GROUP BY id, email, WITH ROLLUP;
