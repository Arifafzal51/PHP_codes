x = c(10, 20, 30)
print("Sum:")
print(sum(x))
print("Mean:")
print(mean(x))  
print("Product:")
print(prod(x))



my.name <- readline(prompt="Enter name: ")
my.age <- readline(prompt="Enter age: ")
# convert character into integer
my.age <- as.integer(my.age)
print(paste("Hi,", my.name, "next year you will be", my.age+1, "years old."))



# consider the vector
data=c(23,45,21,34,5,6,7,8,86,45,3)

# get 4 random elements
print(sample(data,4))

# get 1 random element
print(sample(data,1))

# get 6 random elements
print(sample(data,6))





nums = c(10, 20, 30, 40, 50, 60)
print('Original vector:')
print(nums)   
print(paste("Maximum value of the said vector:",max(nums)))
print(paste("Minimum value of the said vector:",min(nums)))

x = c(10, 20, 30, 25, 9, 26)
print("Original Vectors:")
print(x)
print("Sort in ascending order:")
print(sort(x))
print("Sort in descending order:")
print(sort(x, decreasing=TRUE))

findfactorial <- function(n){
  factorial <- 1
  if(n==0 | n==1){
    factorial <- 1
  } else{
    while(n >= 1){
      factorial <- factorial * n
      n <- n-1
    }
  }
  return (factorial)
}



num = as.integer(readline(prompt = "Enter a number: "))
# use for loop to iterate 10 times
for(i in 1:10) {
print(paste(num,'x', i, '=', num*i))
}



isprime <- function(n) {
    lim <- n/2
    prime <- T
    for( i in 2:lim) {
      if(n %% i == 0)
        prime <- FALSE
     
  }

if(n==2) prime <- T
    if(prime) print(paste(n," is a Prime Number"))
    else print(paste(n," is a Composite Number"))
}



isArmstrong <- function(x){
  sum <- 0
  y <- x
  while(y > 0){
    digit <- y %% 10
    sum <- sum + (digit^3)
    y <- floor(y/10)
   
  }

  if(x == sum){
    print(paste(x,' *** is an Armstrong Number ***'))
  } else {
    print(paste(x,'is not an Armstrong Number'))
  }
} # Function

isArmstrong(153)
isArmstrong(23)




Fibonacci <- numeric(10)
Fibonacci[1] <- Fibonacci[2] <- 1
for (i in 3:10) Fibonacci[i] <- Fibonacci[i - 2] + Fibonacci[i - 1]
print("First 10 Fibonacci numbers:")
print(Fibonacci)


x = c(10, 20, 30, 20, 20, 25, 9, 26)
print("Original Vectors:")
print(x)
print("nth highest value in a given vector:")
print("n = 1")
n = 1
print(sort(x, TRUE)[n])
print("n = 2")
n = 2
print(sort(x, TRUE)[n])
print("n = 3")
n = 3
print(sort(x, TRUE)[n])
print("n = 4")
n = 4
print(sort(x, TRUE)[n])


x = 1:15
print("New vector using : operator-")
print(x)
print("New vector using seq() function-")
print("Specify step size:")
y = seq(1, 3, by=0.3)  
print(y)
print("Specify length of the vector:")
z = seq(1, 5, length.out = 6)
print(z)



n1 = list(1,2,3)
c1 = list(4,5,6)
print("Original lists:")
print(n1)
print(c1)
print("Convert the lists to vectors:")
v1 = unlist(n1)
v2 = unlist(c1)
print(v1)
print(v2)
print("Add two vectors:")
v = v1 + v2
print("New vector:")
print(v)


convert_to_binary <- function(n) {
if(n > 1) {
convert_to_binary(as.integer(n/2))
}
cat(n %% 2)
}



hcf <- function(x, y) {
# choose the smaller number
if(x > y) {
smaller = y
} else {
smaller = x
}
for(i in 1:smaller) {
if((x %% i == 0) && (y %% i == 0)) {
hcf = i
}
}
return(hcf)
}
# take input from the user
num1 = as.integer(readline(prompt = "Enter first number: "))
num2 = as.integer(readline(prompt = "Enter second number: "))
print(paste("The H.C.F. of", num1,"and", num2,"is", hcf(num1, num2)))



print("Two vectors of different lengths:")
v1 =  c(1,3,4,5)
v2 =  c(10,11,12,13,14,15)
print(v1)
print(v2)
result = array(c(v1,v2),dim = c(3,3,2))
print("New array:")
print(result)
print("The second row of the second matrix of the array:")
print(result[2,,2])
print("The element in the 3rd row and 3rd column of the 1st matrix:")
print(result[3,3,1])





# Create two 2x3 matrixes.
m1 = matrix(c(1, 2, 3, 4, 5, 6), nrow = 2)
print("Matrix-1:")
print(m1)
m2 = matrix(c(0, 1, 2, 3, 0, 2), nrow = 2)
print("Matrix-2:")
print(m2)

result = m1 + m2
print("Result of addition")
print(result)

result = m1 - m2
print("Result of subtraction")
print(result)

result = m1 * m2
print("Result of multiplication")
print(result)

result = m1 / m2
print("Result of division:")
print(result)



row_names = c("row1", "row2", "row3", "row4")
col_names = c("col1", "col2", "col3", "col4")
M = matrix(c(1:16), nrow = 4, byrow = TRUE, dimnames = list(row_names, col_names))
print("Original Matrix:")
print(M)
print("Access the element at 3rd column and 2nd row:")
print(M[2,3])
print("Access only the  3rd row:")
print(M[3,])
print("Access only the 4th column:")
print(M[,4])


m = matrix(c(1:16), nrow = 4, byrow = TRUE)
print("Original Matrix:")
print(m)
result = which(m == max(m), arr.ind=TRUE)
print("Row and column of maximum value of the said matrix:")
print(result)
result = which(m == min(m), arr.ind=TRUE)
print("Row and column of minimum value of the said matrix:")
print(result)


x = matrix(1:12, ncol=3)
y = matrix(13:24, ncol=3)
print("Matrix-1")
print(x)
print("Matrix-2")
print(y)
result = dim(rbind(x,y))
print("After concatenating two given matrices:")
print(result)



exam_data = data.frame(
name = c('Anastasia', 'Dima', 'Katherine', 'James', 'Emily', 'Michael', 'Matthew', 'Laura', 'Kevin', 'Jonas'),
score = c(12.5, 9, 16.5, 12, 9, 20, 14.5, 13.5, 8, 19),
attempts = c(1, 3, 2, 3, 2, 3, 1, 1, 2, 1),
qualify = c('yes', 'no', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'no', 'yes')
)
print("Original dataframe:")
print(exam_data)
print("Extract Specific columns:")
result <- data.frame(exam_data$name,exam_data$score)
print(result)